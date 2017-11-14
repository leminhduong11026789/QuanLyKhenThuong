<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Hoten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hoten', 'Hoten:') !!}
    {!! Form::text('hoten', null, ['class' => 'form-control']) !!}
</div>

<!-- Tinh Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tinh_id', 'Tinh Id:') !!}
    {!! Form::text('tinh_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Huyen Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('huyen_id', 'Huyen Id:') !!}
    {!! Form::text('huyen_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Xa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xa_id', 'Xa Id:') !!}
    {!! Form::text('xa_id', null, ['class' => 'form-control']) !!}
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
            <a href="{!! route('admin.nhanViens.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
