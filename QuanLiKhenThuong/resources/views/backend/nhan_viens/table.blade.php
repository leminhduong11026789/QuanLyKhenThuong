<table class="table table-responsive" id="nhanViens-table">
    <thead>
        <th>User Id</th>
        <th>Hoten</th>
        <th>Ngaysinh</th>
        <th>Tinh Id</th>
        <th>Huyen Id</th>
        <th>Xa Id</th>
        <th>Gioitinh</th>
        <th>Email</th>
        <th>Dantoc</th>
        <th>Tongiao</th>
        <th>So Cmnd</th>
        <th>Ngaycap</th>
        <th>Slug</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($nhanViens as $nhanVien)
        <tr>
            <td>{!! $nhanVien->user_id !!}</td>
            <td>{!! $nhanVien->hoten !!}</td>
            <td>{!! $nhanVien->ngaysinh !!}</td>
            <td>{!! $nhanVien->tinh_id !!}</td>
            <td>{!! $nhanVien->huyen_id !!}</td>
            <td>{!! $nhanVien->xa_id !!}</td>
            <td>{!! $nhanVien->gioitinh !!}</td>
            <td>{!! $nhanVien->email !!}</td>
            <td>{!! $nhanVien->dantoc !!}</td>
            <td>{!! $nhanVien->tongiao !!}</td>
            <td>{!! $nhanVien->so_cmnd !!}</td>
            <td>{!! $nhanVien->ngaycap !!}</td>
            <td>{!! $nhanVien->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.nhanViens.destroy', $nhanVien->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.nhanViens.show', [$nhanVien->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.nhanViens.edit', [$nhanVien->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>