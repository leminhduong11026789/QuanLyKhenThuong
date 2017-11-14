@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">CuocThi</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($cuocThi, ['route' => ['admin.cuocThis.update', $cuocThi->id], 'method' => 'patch']) !!}

            @include('backend.cuoc_this.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection