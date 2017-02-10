<table class="table table-responsive" id="subConceptCategories-table">
    <thead>
        <th>Concepto</th>
        <th>Sub Concepto</th>
        <th>Categoria</th>
        <th>Estado</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($subConceptCategories as $subConceptCategory)
        <tr>
            <td>{!! $subConceptCategory->sub_concept->concept->name !!}</td>
            <td>{!! $subConceptCategory->sub_concept->name !!}</td>
            <td>{!! $subConceptCategory->name !!}</td>
            <td>{!! ($subConceptCategory->active) ? 'Activo':'Inactivo' !!}</td>
            <td>
                {!! Form::open(['route' => ['sub_concept_categories.destroy', $subConceptCategory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>

                    <button href="{!! route('sub_concept_categories.edit', [$subConceptCategory->id]) !!}" datat-row="{{$subConceptCategory->id}}" class='btn btn-default btn-xs'  data-target="#addEditItem" data-toggle="modal"><i class="glyphicon glyphicon-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-xs mt-delete" data-title="Esta seguro de eliminar este registro?" data-type="warning" data-allow-outside-click="false" data-show-confirm-button="true" data-show-cancel-button="true"
                            data-cancel-button-class="btn-danger" data-cancel-button-text='No, Cancelar' data-confirm-button-text='Si, Continuar' data-confirm-button-class="btn green"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>