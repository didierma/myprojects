<table class="table table-responsive" id="approvers-table">
    <thead>
        <th>Usuario</th>
        <th>Rol</th>
        <th>Nivel de Aprobacion</th>
        <th>Proyecto</th>
        <th>Zona</th>
        <th>Estado</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($approvers as $approver)
        <tr>
            <td>{!! $approver->user->full_name !!}</td>
            <td>{!! $approver->role->display_name !!}</td>
            <td>{!! $approver->level !!}</td>
            <td>{!! $approver->project->name !!}</td>
            <td>{!! $approver->zone->zone !!}</td>
            <td>{!! ($approver->active) ? 'Activo':'Inactivo' !!}</td>
            <td>
                {!! Form::open(['route' => ['approvers.destroy', $approver->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <button href="{!! route('approvers.edit', [$approver->id]) !!}" class='btn btn-default btn-xs' data-target="#addEditItem" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-xs mt-delete" data-title="Esta seguro de eliminar este registro?" data-type="warning" data-allow-outside-click="false" data-show-confirm-button="true" data-show-cancel-button="true"
                            data-cancel-button-class="btn-danger" data-cancel-button-text='No, Cancelar' data-confirm-button-text='Si, Continuar' data-confirm-button-class="btn green"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>