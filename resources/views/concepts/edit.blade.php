
<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit portlet-form ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Eitar Concepto</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="form-group col-md-12">
                    <div class="col-md-10">
                        @include('adminlte-templates::common.errors')
                    </div>
                </div>
                {!! Form::model($concept, ['route' => ['concepts.update', $concept->id], 'method' => 'patch']) !!}

                @include('concepts.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>