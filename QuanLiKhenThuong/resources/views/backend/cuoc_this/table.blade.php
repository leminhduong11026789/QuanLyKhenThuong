<table class="table table-responsive" id="cuocThis-table">
    <thead>
        <th>Ten</th>
        <th>Thoihan Thamgia</th>
        <th>Loaihinh</th>
        <th>Bantochuc</th>
        <th>Batbuoc</th>
        <th>Giaithuong</th>
        <th>Mota</th>
        <th>Slug</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cuocThis as $cuocThi)
        <tr>
            <td>{!! $cuocThi->ten !!}</td>
            <td>{!! $cuocThi->thoihan_thamgia !!}</td>
            <td>{!! $cuocThi->loaihinh !!}</td>
            <td>{!! $cuocThi->bantochuc !!}</td>
            <td>{!! $cuocThi->batbuoc !!}</td>
            <td>{!! $cuocThi->giaithuong !!}</td>
            <td>{!! $cuocThi->mota !!}</td>
            <td>{!! $cuocThi->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.cuocThis.destroy', $cuocThi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.cuocThis.show', [$cuocThi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.cuocThis.edit', [$cuocThi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>