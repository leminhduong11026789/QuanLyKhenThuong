<table class="table table-responsive" id="danhHieus-table">
    <thead>
        <th>Ten</th>
        <th>Loai Danhhieu</th>
        <th>Sotien</th>
        <th>Nam</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($danhHieus as $danhHieu)
        <tr>
            <td>{!! $danhHieu->ten !!}</td>
            <td>{!! $danhHieu->loai_danhhieu !!}</td>
            <td>{!! $danhHieu->sotien !!}</td>
            <td>{!! $danhHieu->nam !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.danhHieus.destroy', $danhHieu->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.danhHieus.show', [$danhHieu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.danhHieus.edit', [$danhHieu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>