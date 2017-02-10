<table class="table table-responsive" id="subConcepts-table">
    <thead>
        <th>Concepto</th>
        <th>Sub Concepto</th>
        <th>Estado</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($subConcepts as $subConcept)
        <tr>
            <td>{!! $subConcept->concept->name !!}</td>
            <td>{!! $subConcept->name !!}</td>
            <td>{!! ($subConcept->active) ? 'Activo':'Inactivo' !!}</td>
            <td>
                {!! Form::open(['route' => ['sub_concepts.destroy', $subConcept->id], 'method' => 'delete']) !!}
                <div class='btn-group'>

                    <button href="{!! route('sub_concepts.edit', [$subConcept->id]) !!}" data-row="{!! $subConcept->id !!}" class='btn btn-default btn-xs' data-target="#addEditItem" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-xs mt-delete" data-title="Esta seguro de eliminar este registro?" data-type="warning" data-allow-outside-click="false" data-show-confirm-button="true" data-show-cancel-button="true"
                            data-cancel-button-class="btn-danger" data-cancel-button-text='No, Cancelar' data-confirm-button-text='Si, Continuar' data-confirm-button-class="btn green"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>