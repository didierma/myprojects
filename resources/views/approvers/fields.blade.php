<div class="form-body">
    <div class="form-group form-md-line-input">
        <label class="col-md-3 control-label" for="form_control_1">Usuario
            <span class="required">*</span>
        </label>
        <div class="col-md-6">
            {!! Form::select('user_id',$users, null, ['class' => 'form-control select2','required']) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        <label class="col-md-3 control-label" for="form_control_1">Rol de aprobacion
            <span class="required">*</span>
        </label>
        <div class="col-md-6">
            {!! Form::select('rol_id',[], null, ['class' => 'form-control select2','required']) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        <label class="col-md-3 control-label" for="form_control_1">Nivel de aprobacion
            <span class="required">*</span>
        </label>
        <div class="col-md-6">
            {!! Form::select('level',[], null, ['class' => 'form-control select2','required']) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        <label class="col-md-3 control-label" for="form_control_1">Proyecto de aprobacion
            <span class="required">*</span>
        </label>
        <div class="col-md-6">
            {!! Form::select('project_id',[], null, ['class' => 'form-control select2','required']) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        <label class="col-md-3 control-label" for="form_control_1">Zona de aprobacion
            <span class="required">*</span>
        </label>
        <div class="col-md-6">
            {!! Form::select('zone_id',[], null, ['class' => 'form-control select2','required']) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">

        <label class="col-md-3 control-label" for="form_control_1">Estado
            <span class="required">*</span>
        </label>
        <div class="col-md-6">
            {!! Form::select('active',['1'=>'Activo','0'=>'Inactivo'], null, ['class' => 'form-control select2','required']) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>
</div>

<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                <button type="button" data-dismiss="modal" class="btn btn-outline dark">Cancelar</button>
                {!! Form::submit('Guardar', ['class' => 'btn green']) !!}
            </div>

        </div>
    </div>
</div>

