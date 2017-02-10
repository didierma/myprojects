
    <div class="form-body">

        <div class="form-group form-md-line-input">

            <label class="col-md-3 control-label" for="form_control_1">Proyecto
                <span class="required">*</span>
            </label>
            <div class="col-md-6">
                {!! Form::select('project_id',$projects, null, ['class' => 'form-control select2']) !!}
                <div class="form-control-focus"> </div>
            </div>
        </div>

        <div class="form-group form-md-line-input">
            <label class="col-md-3 control-label" for="form_control_1">Presupuesto
                <span class="required">*</span>
            </label>
            <div class="col-md-6">
                {!! Form::select('source_card',[], null, ['class' => 'form-control select2']) !!}
                <div class="form-control-focus"> </div>
            </div>
        </div>
        <div class="form-group form-md-line-input">
            <label class="col-md-3 control-label" for="form_control_1">Beneficiario
                <span class="required">*</span>
            </label>
            <div class="col-md-6">
                {!! Form::select('beneficiary',[], null, ['class' => 'form-control select2']) !!}
                <div class="form-control-focus"> </div>
            </div>
        </div>
        <div class="form-group form-md-line-input">
            <label class="col-md-3 control-label" for="form_control_1">Tarjeta Beneficiario
                <span class="required">*</span>
            </label>
            <div class="col-md-6">
                {!! Form::select('destination_card',[], null, ['class' => 'form-control select2','id'=>'destination_card']) !!}
                <div class="form-control-focus"> </div>
            </div>
        </div>
        <div class="form-group form-md-line-input">
            <label class="col-md-3 control-label" for="form_control_1">Valor de Recarga
                <span class="required">*</span>
            </label>
            <div class="col-md-6">
                {!! Form::text('amount', null, ['class' => 'form-control']) !!}
                <div class="form-control-focus"> </div>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Guardar', ['class' => 'btn green']) !!}
                    <a href="{!! route('recharges.index') !!}" class="btn btn-default">Cancelar</a>
                </div>

            </div>
        </div>
    </div>

