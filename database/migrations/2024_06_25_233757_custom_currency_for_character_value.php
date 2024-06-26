<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->string('custom_currency', 191)->nullable()->default(null);
        });

        Schema::table('sales_characters', function (Blueprint $table) {
            $table->string('custom_currency', 191)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropColumn('custom_currency');
        });

        Schema::table('sales_characters', function (Blueprint $table) {
            $table->dropColumn('custom_currency');
        });
    }
};
