<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $deposit->id !!}</p>
</div>

<!-- Project Id Field -->
<div class="form-group">
    {!! Form::label('project_id', 'Project Id:') !!}
    <p>{!! $deposit->project_id !!}</p>
</div>

<!-- Source Card Field -->
<div class="form-group">
    {!! Form::label('source_card', 'Source Card:') !!}
    <p>{!! $deposit->source_card !!}</p>
</div>

<!-- Destination Card Field -->
<div class="form-group">
    {!! Form::label('destination_card', 'Destination Card:') !!}
    <p>{!! $deposit->destination_card !!}</p>
</div>

<!-- Beneficiary Field -->
<div class="form-group">
    {!! Form::label('beneficiary', 'Beneficiary:') !!}
    <p>{!! $deposit->beneficiary !!}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{!! $deposit->amount !!}</p>
</div>

<!-- Transaction Type Field -->
<div class="form-group">
    {!! Form::label('transaction_type', 'Transaction Type:') !!}
    <p>{!! $deposit->transaction_type !!}</p>
</div>

<!-- Depositor Field -->
<div class="form-group">
    {!! Form::label('depositor', 'Depositor:') !!}
    <p>{!! $deposit->depositor !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $deposit->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $deposit->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $deposit->deleted_at !!}</p>
</div>

