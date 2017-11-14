<!-- Cuocthi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cuocthi_id', 'Cuocthi Id:') !!}
    {!! Form::text('cuocthi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tentep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tentep', 'Tentep:') !!}
    {!! Form::text('tentep', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('admin.cuocThiTepDinhKems.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
