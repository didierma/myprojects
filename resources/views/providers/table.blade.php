<table class="table table-responsive" id="providers-table">
    <thead>
        <th>Name</th>
        <th>Nit</th>
        <th>State</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($providers as $provider)
        <tr>
            <td>{!! $provider->name !!}</td>
            <td>{!! $provider->nit !!}</td>
            <td>{!! $provider->state !!}</td>
            <td>
                {!! Form::open(['route' => ['providers.destroy', $provider->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('providers.show', [$provider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('providers.edit', [$provider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>