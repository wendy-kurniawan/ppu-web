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
                          <a title="Landing Page" href="{{ route('src.index') }}" aria-expanded="false"><span
                                  class="fa fa-home icon-wrap" aria-hidden="true"></span>
                              <span class="mini-click-non">Home</span></a>
                      </li>
                        @if (Auth::user()->STATUSUSER == "ADMIN")
                        {{-- Menu Input --}}
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                                <span class="fa fa-pencil-square icon-wrap"></span>
                                <span class="mini-click-non">Input Form</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a title="All Professors" href="{{route('bidangkeahlian.index')}}">
                                    <span class="mini-sub-pro">Bidang Keahlian</span></a>
                                </li>
                                <li>
                                    <a title="Add Professor" href="{{route('bidangumkm.index')}}">
                                    <span class="mini-sub-pro"></span>Bidang UMKM</a>
                                </li>
                                <li>
                                    <a title="Add Professor" href="{{route('jeniskegiatan.index')}}">
                                    <span class="mini-sub-pro">Jenis Kegiatan</span></a>
                                </li>                     
                            </ul>
                        </li>
                        {{-- Form Permintaan --}}
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-question-circle-o icon-wrap"></span>
                            <span class="mini-click-non">Form Permintaan</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li>
                                        <a title="All Professors" href="{{route('permintaan.index')}}">
                                        <span class="mini-sub-pro">Input Permintaan</span></a>
                                    </li>
                                </ul>
                        </li>
                        {{-- Menu Data --}}
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                            <span class="fa fa-database icon-wrap"></span>
                            <span class="mini-click-non">Data</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a title="All Professors" href="{{route('datanarasumber.index')}}">
                                    <span class="mini-sub-pro">Narasumber</span></a>
                                </li>
                                <li>
                                    <a title="All Professors" href="{{route('dataumkm.index')}}">
                                    <span class="mini-sub-pro">UMKM</span></a>
                                </li>
                            </ul>
                        </li>

                        @elseif (Auth::user()->STATUSUSER == "UMKM")
                            {{-- Menu Permintaan Narsumber --}}
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                <span class="fa fa-question-circle-o icon-wrap"></span>
                                <span class="mini-click-non">Form Permintaan</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li>
                                            <a title="All Professors" href="{{route('permintaan.index')}}">
                                            <span class="mini-sub-pro">Input Permintaan</span></a>
                                        </li>
                                    </ul>
                            </li>
                            {{-- Menu Data --}}
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">
                                    <span class="fa fa-database icon-wrap"></span>
                                    <span class="mini-click-non">Data</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li>
                                        <a title="All Professors" href="{{route('datanarasumber.index')}}">
                                            <span class="mini-sub-pro">Narasumber</span></a>
                                    </li>
                                    <li>
                                        <a title="All Professors" href="{{route('dataumkm.index')}}">
                                            <span class="mini-sub-pro">UMKM</span></a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            {{-- do something narasumber --}}
                        @endif
                      <li>
                          <a title="Landing Page" href="#" aria-expanded="false"><span
                                  class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                              <span class="mini-click-non">Event</span></a>
                      </li>
                  </ul>
              </nav>
          </div>
      </nav>
  </div>
  <!-- End Header menu area -->
  