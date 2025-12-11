<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User\User;
use App\Models\User\UserAlias;
use App\Services\UserService;
use Carbon\Carbon;
use App;
use Config;

class CreateMultipleUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:create-multiple-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create multiple test users for local instances. Do not run on live !';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (App::environment('local') && config('app.debug')) {
            $num = $this->ask('How many test users would you like to create?');
            $this->line('Please make sure to remember the data entered next - you will not be able to log into the accounts if you forget the password.');
            $name = $this->anticipate('Username', ['Test', 'User']);
            $password = $this->ask('What is the password for the accounts?');

            $this->line("\nUsername: ".$name);
            $this->line('Password: '.$password);
            $confirm = $this->confirm('Proceed to create users with this information?');

            $key = 0;

            // grab the last user name, check if there's a number in it
            // and either starts from 0 or adds it to the count for the name creation
            $userName = User::pluck('name')->last();
            if ((!preg_match('/[0-9]/', $userName))) {
                $userInt = 0;
            } else {
                $userInt = preg_replace('/[^0-9]/', '', $userName);
            }

            if ($confirm) {
                $service = new UserService;
                for ($i = 0; $i < $num; $i++) {

                    $incr = ++$key+$userInt;

                    $dataUser = [
                        'name'  => $name.$incr,
                        'email' => 'example'.$incr.'@email.com',
                        'password'  => $password,
                        'rank_id' => 2,
                        'dob'       => Carbon::createFromFormat('Y-m-d', '1970-01-01'),
                        'has_alias' => 1,
                    ];

                    if ($user = $service->createUser($dataUser, User::find(1))) {
                        UserAlias::create([
                            'user_id'          => $user->id,
                            'site'             => 'deviantart',
                            'alias'            => 'Alias'.$incr,
                            'is_primary_alias' => 1,
                            'is_visible'       => 1,
                        ]);

                        $user->email_verified_at = Carbon::now();
                        $user->has_alias = 1;
                        $user->save();

                        $this->info("User created:\n".$user->name. "\n" .$user->email. '');
                        $this->newLine();
                    } else {
                        foreach ($service->errors()->getMessages()['error'] as $error) {
                            $this->error('Error creating user: '.$error);
                            break;
                        }
                    }
                }
            }
        } elseif (App::environment('local') && !config('app.debug')) {
            $this->newLine();
            $this->info('Please adjust your APP_DEBUG to true in the .env file if you are on a local instance!');
            return;

        } elseif (App::environment('production', 'staging')) {
            $this->newLine();
            $this->warn('You cannot run this command on a staging, production or live site. This command is only meant for local developping & debugging.');
            return;
        }
    }
}
