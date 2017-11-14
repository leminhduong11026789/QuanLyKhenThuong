<!-- Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ten', 'Ten:') !!}
    {!! Form::text('ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Loai Danhhieu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('loai_danhhieu', 'Loai Danhhieu:') !!}
    {!! Form::text('loai_danhhieu', null, ['class' => 'form-control']) !!}
</div>

<!-- Sotien Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sotien', 'Sotien:') !!}
    {!! Form::number('sotien', null, ['class' => 'form-control']) !!}
</div>

<!-- Nam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nam', 'Nam:') !!}
    {!! Form::number('nam', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('admin.danhHieus.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
