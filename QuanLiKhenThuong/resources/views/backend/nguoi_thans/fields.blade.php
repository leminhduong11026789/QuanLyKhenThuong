<!-- Nhanvien Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nhanvien_id', 'Nhanvien Id:') !!}
    {!! Form::text('nhanvien_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Hoten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hoten', 'Hoten:') !!}
    {!! Form::text('hoten', null, ['class' => 'form-control']) !!}
</div>

<!-- Gioitinh Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gioitinh', 'Gioitinh:') !!}
    {!! Form::number('gioitinh', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Dantoc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dantoc', 'Dantoc:') !!}
    {!! Form::text('dantoc', null, ['class' => 'form-control']) !!}
</div>

<!-- Tongiao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tongiao', 'Tongiao:') !!}
    {!! Form::text('tongiao', null, ['class' => 'form-control']) !!}
</div>

<!-- So Cmnd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('so_cmnd', 'So Cmnd:') !!}
    {!! Form::text('so_cmnd', null, ['class' => 'form-control']) !!}
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
            <a href="{!! route('admin.nguoiThans.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
