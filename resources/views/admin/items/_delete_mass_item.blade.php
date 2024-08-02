@if ($item)
    {!! Form::open(['url' => 'admin/data/items/delete-mass/' . $item->id]) !!}

    <p>You are about to delete the item <strong>{{ $item->name }}</strong>. This is not reversible. If this item exists in at least one user's possession, this item will be dropped from the user's inventory.</p>
    <p>Are you sure you want to delete <strong>{{ $item->name }}</strong>?</p>

    {!! Form::checkbox('im_sure', 1) !!} <p>I understand that by pressing this button that this item will be removed from all inventories, prompts, or services that are currently using that item. I understand once the process has started it cannot be reversed or undone</p>

    <div class="text-right">
        {!! Form::submit('Delete Item', ['class' => 'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}
@else
    Invalid item selected.
@endif
