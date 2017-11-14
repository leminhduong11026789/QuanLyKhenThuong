@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">CuocThiTepDinhKem</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($cuocThiTepDinhKem, ['route' => ['admin.cuocThiTepDinhKems.update', $cuocThiTepDinhKem->id], 'method' => 'patch']) !!}

            @include('backend.cuoc_thi_tep_dinh_kems.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection