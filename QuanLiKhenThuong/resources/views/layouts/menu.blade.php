<li class="{!! Request::is('home*') ? 'active' : '' !!}">
    <a href="{!! url('/home') !!}" class="nav-link nav-toggle">
        <i class="fa fa-tachometer" aria-hidden="true"></i>
        <span class="title">@lang("messages.home")</span>
    </a>
</li>


<li class="{!! Request::is('tinhs*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.tinhs.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Tỉnh</span></a>
</li>

<li class="{!! Request::is('huyens*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.huyens.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Huyện</span></a>
</li>

<li class="{!! Request::is('xas*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.xas.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Xã</span></a>
</li>

<li class="{!! Request::is('nhanViens*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.nhanViens.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Nhân Viên</span></a>
</li>


<li class="{!! Request::is('cuocThis*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.cuocThis.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Cuộc Thi</span></a>
</li>

<li class="{!! Request::is('cuocThiDoiTuongThamGias*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.cuocThiDoiTuongThamGias.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Tham Gia Cuộc Thi</span></a>
</li>

<li class="{!! Request::is('danhHieus*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.danhHieus.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Danh Hiệu</span></a>
</li>

<li class="{!! Request::is('doiTuongDoatGiais*') ? 'active' : '' !!}">
    <a class="nav-link nav-toggle" href="{!! route('admin.doiTuongDoatGiais.index') !!}">
    <i class="fa fa-edit"></i>
    <span  class="title">Đối Tượng Đạt Giải</span></a>
</li>


