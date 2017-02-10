<table class="table table-responsive" id="zones-table">
    <thead>
        <th>Zona</th>
        <th>Estado</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($zones as $zone)
        <tr>
            <td>{!! $zone->zone !!}</td>
            <td>{!! ($zone->active) ? 'Activo':'Inactivo' !!}</td>
            <td>
                {!! Form::open(['route' => ['zones.destroy', $zone->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <button href="{!! route('zones.edit', [$zone->id]) !!}" class='btn btn-default btn-xs' data-target="#addEditItem" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-xs mt-delete" data-title="Esta seguro de eliminar este registro?" data-type="warning" data-allow-outside-click="false" data-show-confirm-button="true" data-show-cancel-button="true"
                            data-cancel-button-class="btn-danger" data-cancel-button-text='No, Cancelar' data-confirm-button-text='Si, Continuar' data-confirm-button-class="btn green"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>