<!-- Cuocthi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cuocthi_id', 'Cuocthi Id:') !!}
    {!! Form::text('cuocthi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Doituongthamgia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doituongthamgia', 'Doituongthamgia:') !!}
    {!! Form::number('doituongthamgia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('admin.cuocThiDoiTuongThamGias.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
