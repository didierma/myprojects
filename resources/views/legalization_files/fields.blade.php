<!-- Legalization Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('legalization_id', 'Legalization Id:') !!}
    {!! Form::number('legalization_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Original Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('original_name', 'Original Name:') !!}
    {!! Form::text('original_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('legalizationFiles.index') !!}" class="btn btn-default">Cancel</a>
</div>
