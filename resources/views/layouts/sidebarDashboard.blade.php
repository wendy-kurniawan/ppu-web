<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
      <nav id="sidebar" class="">
          <div class="sidebar-header">
              <a href="{{ route('src.index') }}">
                {{-- <img class="main-logo" src="{{asset('assetLogin/img/logo/logo.png')}}" alt="" /> --}}
              </a>
              <strong><a href="{{ route('src.index') }}"><img src="{{asset('assetLogin/img/logo/logosn.png')}}" alt="" /></a></strong>
          </div>
          <div class="left-custom-menu-adp-wrap comment-scrollbar">
              <nav class="sidebar-nav left-sidebar-menu-pro">
                  <ul class="metismenu" id="menu1">
                      {{-- Menu Home --}}
                      <li class="active">
                          <a title="Home" href="{{ route('src.index') }}" aria-expanded="false"><span
                                  class="fa fa-home icon-wrap" aria-hidden="true"></span>
                              <span class="mini-click-non">Home</span></a>
                      </li>
                        @if (Auth::user()->STATUSUSER == "ADMIN")
                        {{-- Menu Input --}}
                        <li>
                            <a title="Input Form" class="has-arrow" href="#" aria-expanded="false">
                                <span class="fa fa-pencil-square icon-wrap"></span>
                                <span class="mini-click-non">Input Form</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a title="Bidang Keahlian" href="{{route('bidangkeahlian.index')}}">
                                    <span class="mini-sub-pro">Bidang Keahlian</span></a>
                                </li>
                                <li>
                                    <a title="Jenis Masalah" href="{{route('masalah.index')}}">
                                    <span class="mini-sub-pro">Jenis Masalah</span></a>
                                </li>                     
                            </ul>
                        </li>
                        {{-- Form Permintaan --}}
                        <li>
                            <a title="Form Permintaan" class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-question-circle-o icon-wrap"></span>
                            <span class="mini-click-non">Form Permintaan</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li>
                                        <a title="Input Permintaan" href="{{route('permintaan.index')}}">
                                        <span class="mini-sub-pro">Permintaan</span></a>
                                    </li>
                                </ul>
                        </li>
                        {{-- Menu Data --}}
                        <li>
                            <a title="Data" class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-database icon-wrap"></span>
                            <span class="mini-click-non">Data</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a title="Narasumber" href="{{route('datanarasumber.index')}}">
                                    <span class="mini-sub-pro">Narasumber</span></a>
                                </li>
                                <li>
                                    <a title="UMKM" href="{{route('dataumkm.index')}}">
                                    <span class="mini-sub-pro">UMKM</span></a>
                                </li>
                            </ul>
                        </li>

                        @elseif (Auth::user()->STATUSUSER == "UMKM")
                            {{-- Menu Data --}}
                            <li>
                                <a title ="Data" class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-database icon-wrap"></span>
                                    <span class="mini-click-non">Data</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li>
                                        <a title="Data Narasumber" href="{{route('datanarasumber.index')}}">
                                            <span class="mini-sub-pro">Narasumber</span></a>
                                    </li>
                                </ul>
                            </li>
                            {{-- Menu Permintaan Narsumber --}}
                            <li>
                                <a title="Data Permintaan" class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-question-circle-o icon-wrap"></span>
                                    <span class="mini-click-non">Data Permintaan</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li>
                                            <a title="Data Permintaan" href="{{URL('panel/listpenerimaan/'.Auth::User()->PROFILEUSERS_ID)}}">
                                            <span class="mini-sub-pro">Data Permintaan</span></a>
                                        </li>
                                    </ul>
                            </li>
                            {{-- Menu Kuesioner --}}
                            <li>
                                <a title="Kuesioner" href="{{URL('panel/datakuesioner/'.Auth::User()->PROFILEUSERS_ID)}}" aria-expanded="false">
                                <span class="fa fa-filter icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Kuesioner</span></a>
                            </li>
                        @else
                            {{-- do something narasumber --}}
                            {{-- Input Data Kegiatan --}}
                            <li>
                                <a title="Input Kegiatan" class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-pencil"></span>
                                    <span class="mini-click-non">Input Kegiatan </span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li>
                                            <a title="Kegiatan UMKM" href="{{route('kegiatanUMKM.index')}}">
                                            <span class="mini-sub-pro">Kegiatan UMKM</span></a>
                                        </li>
                                        <li>
                                            <a title="Data Kegiatan Anda" href="{{url('panel/kegiatanUMKM/'.Auth::User()->PROFILEUSERS_ID)}}">
                                            <span class="mini-sub-pro">Data Kegiatan Anda</span></a>
                                        </li>
                                        <li>
                                            <a title="Data User Anda" href="{{url('panel/dataregisterkegiatan/'.Auth::User()->PROFILEUSERS_ID)}}">
                                            <span class="mini-sub-pro">Data User Anda</span></a>
                                        </li>
                                    </ul>
                            </li>
                            {{-- Menu Permintaan Narsumber --}}
                            <li>
                                <a title="Data Permintaan" class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-question-circle-o icon-wrap"></span>
                                    <span class="mini-click-non">Data Permintaan</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li>
                                            <a title="Data Permintaan" href="{{URL('panel/listpenerimaan/'.Auth::User()->PROFILEUSERS_ID)}}">
                                            <span class="mini-sub-pro">Data Permintaan</span></a>
                                        </li>
                                    </ul>
                            </li>
                            {{-- Menu Data --}}
                            <li>
                                <a title="Data" class="has-arrow" href="#" aria-expanded="false">
                                <span class="fa fa-database icon-wrap"></span>
                                <span class="mini-click-non">Data</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li>
                                        <a title="UMKM" href="{{route('dataumkm.index')}}">
                                        <span class="mini-sub-pro">UMKM</span></a>
                                    </li>
                                    <li>
                                        <a title="Kuesioner" href="{{URL('panel/ratekuesioner/'.Auth::User()->PROFILEUSERS_ID)}}">
                                        <span class="mini-sub-pro">Kuesioner</span></a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                      <li>
                            <a title="Rangking" href="{{route('rangking.index')}}" aria-expanded="false"><span
                                class="fa fa-trophy icon-wrap sub-icon-mg" aria-hidden="true"></span>
                            <span class="mini-click-non">Rangking</span></a>
                      </li>
                      <li>
                        <a title="Event" href="{{route('event.index')}}" aria-expanded="false"><span
                            class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                        <span class="mini-click-non">Event</span></a>
                      </li>
                  </ul>
              </nav>
          </div>
      </nav>
  </div>
  <!-- End Header menu area -->
  