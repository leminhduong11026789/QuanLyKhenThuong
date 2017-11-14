<table class="table table-responsive" id="nguoiThans-table">
    <thead>
        <th>Nhanvien Id</th>
        <th>Hoten</th>
        <th>Ngaysinh</th>
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
    @foreach($nguoiThans as $nguoiThan)
        <tr>
            <td>{!! $nguoiThan->nhanvien_id !!}</td>
            <td>{!! $nguoiThan->hoten !!}</td>
            <td>{!! $nguoiThan->ngaysinh !!}</td>
            <td>{!! $nguoiThan->gioitinh !!}</td>
            <td>{!! $nguoiThan->email !!}</td>
            <td>{!! $nguoiThan->dantoc !!}</td>
            <td>{!! $nguoiThan->tongiao !!}</td>
            <td>{!! $nguoiThan->so_cmnd !!}</td>
            <td>{!! $nguoiThan->ngaycap !!}</td>
            <td>{!! $nguoiThan->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.nguoiThans.destroy', $nguoiThan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.nguoiThans.show', [$nguoiThan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.nguoiThans.edit', [$nguoiThan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>