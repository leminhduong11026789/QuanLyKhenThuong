<!-- Ten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ten', 'Ten:') !!}
    {!! Form::text('ten', null, ['class' => 'form-control']) !!}
</div>

<!-- Loaihinh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('loaihinh', 'Loaihinh:') !!}
    {!! Form::number('loaihinh', null, ['class' => 'form-control']) !!}
</div>

<!-- Bantochuc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bantochuc', 'Bantochuc:') !!}
    {!! Form::number('bantochuc', null, ['class' => 'form-control']) !!}
</div>

<!-- Batbuoc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('batbuoc', 'Batbuoc:') !!}
    {!! Form::number('batbuoc', null, ['class' => 'form-control']) !!}
</div>

<!-- Giaithuong Field -->
<div class="form-group col-sm-6">
    {!! Form::label('giaithuong', 'Giaithuong:') !!}
    {!! Form::text('giaithuong', null, ['class' => 'form-control']) !!}
</div>

<!-- Mota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mota', 'Mota:') !!}
    {!! Form::text('mota', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('admin.cuocThis.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
