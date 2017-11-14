<table class="table table-responsive" id="xas-table">
    <thead>
        <th>Ten</th>
        <th>Huyen Id</th>
        <th>Mota</th>
        <th>Slug</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($xas as $xa)
        <tr>
            <td>{!! $xa->ten !!}</td>
            <td>{!! $xa->huyen_id !!}</td>
            <td>{!! $xa->mota !!}</td>
            <td>{!! $xa->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.xas.destroy', $xa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.xas.show', [$xa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.xas.edit', [$xa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>