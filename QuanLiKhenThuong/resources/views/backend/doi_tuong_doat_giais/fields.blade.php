<!-- Doituong Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doituong', 'Doituong:') !!}
    {!! Form::number('doituong', null, ['class' => 'form-control']) !!}
</div>

<!-- Ghichu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ghichu', 'Ghichu:') !!}
    {!! Form::text('ghichu', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('admin.doiTuongDoatGiais.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
