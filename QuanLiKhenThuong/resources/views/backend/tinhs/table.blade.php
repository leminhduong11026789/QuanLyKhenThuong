<table class="table table-responsive" id="tinhs-table">
    <thead>
        <th>Ten</th>
        <th>Mota</th>
        <th>Slug</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tinhs as $tinh)
        <tr>
            <td>{!! $tinh->ten !!}</td>
            <td>{!! $tinh->mota !!}</td>
            <td>{!! $tinh->slug !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.tinhs.destroy', $tinh->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.tinhs.show', [$tinh->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.tinhs.edit', [$tinh->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>