<table class="table table-responsive" id="cuocThiDoiTuongThamGias-table">
    <thead>
        <th>Cuocthi Id</th>
        <th>Doituongthamgia</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cuocThiDoiTuongThamGias as $cuocThiDoiTuongThamGia)
        <tr>
            <td>{!! $cuocThiDoiTuongThamGia->cuocthi_id !!}</td>
            <td>{!! $cuocThiDoiTuongThamGia->doituongthamgia !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.cuocThiDoiTuongThamGias.destroy', $cuocThiDoiTuongThamGia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.cuocThiDoiTuongThamGias.show', [$cuocThiDoiTuongThamGia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.cuocThiDoiTuongThamGias.edit', [$cuocThiDoiTuongThamGia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>