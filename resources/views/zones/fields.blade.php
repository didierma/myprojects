<div class="form-body">

    <div class="form-group form-md-line-input">
        <label class="col-md-3 control-label" for="form_control_1">Sub Concepto
            <span class="required">*</span>
        </label>
        <div class="col-md-6">
            {!! Form::text('zone', null, ['class' => 'form-control','required']) !!}
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

