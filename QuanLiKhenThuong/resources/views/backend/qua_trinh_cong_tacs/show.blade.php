@extends('layouts.app')

@section('content')
     <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-equalizer font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">QuaTrinhCongTac</span>
                </div>
            </div>
            <div>
                @include('metronic-templates::common.errors')
            </div>
            <div class="portlet-body form">
                <div class="row" style="padding-left: 20px">
                   @include('backend.qua_trinh_cong_tacs.show_fields')
                   <a href="{!! route('admin.quaTrinhCongTacs.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
@endsection
