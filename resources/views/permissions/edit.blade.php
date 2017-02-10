<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit portlet-form ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Editar</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="form-group col-md-12">
                    <div class="col-md-10">
                        @include('adminlte-templates::common.errors')
                    </div>
                </div>
                {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'patch']) !!}

                    @include('permissions.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>