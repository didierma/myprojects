<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $recharge->id !!}</p>
</div>

<!-- Project Id Field -->
<div class="form-group">
    {!! Form::label('project_id', 'Project Id:') !!}
    <p>{!! $recharge->project_id !!}</p>
</div>

<!-- Source Card Field -->
<div class="form-group">
    {!! Form::label('source_card', 'Source Card:') !!}
    <p>{!! $recharge->source_card !!}</p>
</div>

<!-- Destination Card Field -->
<div class="form-group">
    {!! Form::label('destination_card', 'Destination Card:') !!}
    <p>{!! $recharge->destination_card !!}</p>
</div>

<!-- Beneficiary Field -->
<div class="form-group">
    {!! Form::label('beneficiary', 'Beneficiary:') !!}
    <p>{!! $recharge->beneficiary !!}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{!! $recharge->amount !!}</p>
</div>

<!-- Transaction Type Field -->
<div class="form-group">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    <p>{!! $recharge->transaction_type !!}</p>
</div>

<!-- Depositor Field -->
<div class="form-group">
    {!! Form::label('depositor', 'Depositor:') !!}
    <p>{!! $recharge->depositor !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $recharge->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $recharge->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $recharge->deleted_at !!}</p>
</div>

