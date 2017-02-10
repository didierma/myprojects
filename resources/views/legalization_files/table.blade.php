<table class="table table-responsive" id="legalizationFiles-table">
    <thead>
        <th>Legalization Id</th>
        <th>Name</th>
        <th>Original Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($legalizationFiles as $legalizationFile)
        <tr>
            <td>{!! $legalizationFile->legalization_id !!}</td>
            <td>{!! $legalizationFile->name !!}</td>
            <td>{!! $legalizationFile->original_name !!}</td>
            <td>
                {!! Form::open(['route' => ['legalizationFiles.destroy', $legalizationFile->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('legalizationFiles.show', [$legalizationFile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('legalizationFiles.edit', [$legalizationFile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>