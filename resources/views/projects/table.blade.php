<table class="table table-responsive" id="projects-table">
    <thead>
        <th>Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($projects as $project)
        <tr>
            <td>{!!strtoupper($project->name) !!}</td>
            <td>
                {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <button href="{!! route('projects.edit', [$project->id]) !!}" class='btn btn-default btn-xs'  data-target="#addEditItem" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-xs mt-delete" data-title="Esta seguro de eliminar este registro?" data-type="warning" data-allow-outside-click="false" data-show-confirm-button="true" data-show-cancel-button="true"
                            data-cancel-button-class="btn-danger" data-cancel-button-text='No, Cancelar' data-confirm-button-text='Si, Continuar' data-confirm-button-class="btn green"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>