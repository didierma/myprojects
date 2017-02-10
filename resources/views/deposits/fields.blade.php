<!-- Project Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_id', 'Project Id:') !!}
    {!! Form::number('project_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Source Card Field -->
<div class="form-group col-sm-6">
    {!! Form::label('source_card', 'Source Card:') !!}
    {!! Form::number('source_card', null, ['class' => 'form-control']) !!}
</div>

<!-- Destination Card Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destination_card', 'Destination Card:') !!}
    {!! Form::number('destination_card', null, ['class' => 'form-control']) !!}
</div>

<!-- Beneficiary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('beneficiary', 'Beneficiary:') !!}
    {!! Form::number('beneficiary', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Transaction Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    {!! Form::number('transaction_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Depositor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('depositor', 'Depositor:') !!}
    {!! Form::number('depositor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('deposits.index') !!}" class="btn btn-default">Cancel</a>
</div>
