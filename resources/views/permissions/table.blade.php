<table class="table table-striped table-bordered table-hover table-checkable order-column" id="permissions-table">
    <thead>
        <th>Name</th>
        <th>Display Name</th>
        <th>Description</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($permissions as $permission)
        <tr>
            <td>{!! $permission->name !!}</td>
            <td>{!! $permission->display_name !!}</td>
            <td>{!! $permission->description !!}</td>
            <td>
                {!! Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'delete']) !!}
                <div class='btn-group'>

                    <button href="{!! route('permissions.edit', [$permission->id]) !!}" data-target="#addEditItem" data-toggle="modal" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-xs mt-delete" data-title="Esta seguro de eliminar este registro?" data-type="warning" data-allow-outside-click="false" data-show-confirm-button="true" data-show-cancel-button="true"
                            data-cancel-button-class="btn-danger" data-cancel-button-text='No, Cancelar' data-confirm-button-text='Si, Continuar' data-confirm-button-class="btn green"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>