@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">CuocThiDoiTuongThamGia</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($cuocThiDoiTuongThamGia, ['route' => ['admin.cuocThiDoiTuongThamGias.update', $cuocThiDoiTuongThamGia->id], 'method' => 'patch']) !!}

            @include('backend.cuoc_thi_doi_tuong_tham_gias.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection