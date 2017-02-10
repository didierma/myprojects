<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit portlet-form ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">Agregar</span>
                </div>
            </div>
            <div class="portlet-body">
                {!! Form::open(['route' => 'approvers.store']) !!}

                    @include('approvers.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>