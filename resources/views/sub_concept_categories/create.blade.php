<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit portlet-form ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Agregar  Sub Categoria de Concepto</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="form-group col-md-12">
                    <div class="col-md-10">
                        @include('adminlte-templates::common.errors')
                    </div>
                </div>
                {!! Form::open(['route' => 'sub_concept_categories.store']) !!}

                @include('sub_concept_categories.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
