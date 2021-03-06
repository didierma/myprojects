<div class="form-body">

    <div class="form-group form-md-line-input">
        <label class="col-md-3 control-label" for="form_control_1">Nombre
            <span class="required">*</span>
        </label>
        <div class="col-md-6">
            {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        <label class="col-md-3 control-label" for="form_control_1">Nombre a mostrar
            <span class="required">*</span>
        </label>
        <div class="col-md-6">
            {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
            <div class="form-control-focus"> </div>
        </div>
    </div>

    <div class="form-group form-md-line-input">
        <label class="col-md-3 control-label" for="form_control_1">Descripcion</label>
        <div class="col-md-6">
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
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
