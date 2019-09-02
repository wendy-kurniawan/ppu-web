<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            @if (Auth::user()->STATUSUSER == "ADMIN")
                            <li>
                                <a href="{{route('src.index')}}">Home
                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#inputForm" href="#">
                                Input Form 
                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                <ul id="inputForm" class="collapse dropdown-header-top">
                                    <li><a href="{{route('bidangkeahlian.index')}}">Bidang Keahlian</a></li>
                                    <li><a href="{{route('bidangumkm.index')}}">Bidang UMKM</a></li>
                                    <li><a href="{{route('jeniskegiatan.index')}}">Jenis Kegiatan</a></li>
                                    <li><a href="{{route('masalah.index')}}">Jenis Masalah</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#inputForm" href="#">Form Permintaan
                                    <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                <ul id="inputForm" class="collapse dropdown-header-top">
                                    <li><a href="{{route('permintaan.index')}}">Input Permintaan</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#inputForm" href="#">Data <span
                                        class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                <ul id="inputForm" class="collapse dropdown-header-top">
                                    <li><a href="{{route('datanarasumber.index')}}">Narasumber</a></li>
                                    <li><a href="{{route('dataumkm.index')}}">UMKM</a></li>
                                </ul>
                            </li>
                            @elseif (Auth::user()->STATUSUSER == "NARASUMBER")
                            <li>
                                <a href="{{route('src.index')}}">Home
                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#inputForm" href="#">
                                Input Kegiatan 
                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                <ul id="inputForm" class="collapse dropdown-header-top">
                                    <li><a href="{{route('kegiatanUMKM.index')}}">Kegiatan UMKM</a></li>
                                    <li><a href="{{url('panel/kegiatanUMKM/'.Auth::User()->PROFILEUSERS_ID)}}">Data Kegiatan Anda</a></li>
                                    <li><a href="{{url('panel/dataregisterkegiatan/'.Auth::User()->PROFILEUSERS_ID)}}">Data User Anda</a></li>
                                </ul>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#inputForm" href="#">
                                Data Permintaan
                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                <ul id="inputForm" class="collapse dropdown-header-top">
                                    <li><a href="{{URL('panel/listpenerimaan/'.Auth::User()->PROFILEUSERS_ID)}}">Data Permintaan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#inputForm" href="#">
                                Data
                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                <ul id="inputForm" class="collapse dropdown-header-top">
                                    <li><a href="{{route('dataumkm.index')}}">UMKM</a></li>
                                    <li><a href="{{URL('panel/ratekuesioner/'.Auth::User()->PROFILEUSERS_ID)}}">Kuesioner</a></li>
                                </ul>
                            </li>
                            @else
                            <li>
                                <a href="{{route('src.index')}}">Home
                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#inputForm" href="#">
                                Data
                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                <ul id="inputForm" class="collapse dropdown-header-top">
                                    <li><a href="{{route('datanarasumber.index')}}">Narasumber</a></li>
                                </ul>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#inputForm" href="#">
                                Data Permintaan
                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                <ul id="inputForm" class="collapse dropdown-header-top">
                                    <li><a href="{{URL('panel/listpenerimaan/'.Auth::User()->PROFILEUSERS_ID)}}">Data Permintaan</a></li>
                                </ul>
                            </li>

                            
                            @endif
                            <li><a href="{{route('rangking.index')}}">Rangking</a></li>
                            <li><a href="{{route('event.index')}}">Event</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->