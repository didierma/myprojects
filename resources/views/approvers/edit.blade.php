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
                {!! Form::model($approver, ['route' => ['approvers.update', $approver->id], 'method' => 'patch']) !!}

                    @include('approvers.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>