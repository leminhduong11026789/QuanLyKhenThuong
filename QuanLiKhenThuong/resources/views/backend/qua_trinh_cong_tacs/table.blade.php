<table class="table table-responsive" id="quaTrinhCongTacs-table">
    <thead>
        <th>Nhanvien Id</th>
        <th>Tu Ngay</th>
        <th>Den Ngay</th>
        <th>Congviec</th>
        <th>Ghichu</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($quaTrinhCongTacs as $quaTrinhCongTac)
        <tr>
            <td>{!! $quaTrinhCongTac->nhanvien_id !!}</td>
            <td>{!! $quaTrinhCongTac->tu_ngay !!}</td>
            <td>{!! $quaTrinhCongTac->den_ngay !!}</td>
            <td>{!! $quaTrinhCongTac->congviec !!}</td>
            <td>{!! $quaTrinhCongTac->ghichu !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.quaTrinhCongTacs.destroy', $quaTrinhCongTac->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.quaTrinhCongTacs.show', [$quaTrinhCongTac->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.quaTrinhCongTacs.edit', [$quaTrinhCongTac->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>