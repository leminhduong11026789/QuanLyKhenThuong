<table class="table table-responsive" id="huyens-table">
    <thead>
        <th>Ten</th>
        <th>Tinh Id</th>
        <th>Mota</th>
        <th>Slug</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($huyens as $huyen)
        <tr>
            <td>{!! $huyen->ten !!}</td>
            <td>{!! $huyen->tinh_id !!}</td>
            <td>{!! $huyen->mota !!}</td>
            <td>{!! $huyen->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.huyens.destroy', $huyen->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.huyens.show', [$huyen->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.huyens.edit', [$huyen->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>