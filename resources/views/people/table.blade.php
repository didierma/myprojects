<table class="table table-striped table-hover table-checkable order-column" id="people-table">
    <thead>
        <th>No. Cedula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Usuario</th>
        <th>Estado</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($people as $person)
        <tr>
            <td>{!! $person->colombian_id !!}</td>
            <td>{!! $person->first_name !!}</td>
            <td>{!! $person->last_name !!}</td>
            <td>{!! $person->email !!}</td>
            <td>{!! $person->username !!}</td>
            <td>{!! ($person->active) ? 'Activo':'Inactivo' !!}</td>

            <td>
                {!! Form::open(['route' => ['people.destroy', $person->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('people.show', [$person->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('people.edit', [$person->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>