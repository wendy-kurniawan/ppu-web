@extends('layouts.appdashboard')
@section('title','Profile Narasumber')

@section('customCSS')
      <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assetLogin/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assetLogin/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetLogin/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetLogin/css/calendar/fullcalendar.print.min.css')}}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/form/all-type-forms.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/responsive.css')}}">
    <!-- select2 CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assetLogin/css/select2/select2.min.css')}}">
   <!-- modernizr JS
		============================================ -->
    <script src="{{asset('assetLogin/js/vendor/modernizr-2.8.3.min.js')}}"></script>
@endsection


@section('contentDashboard')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{route('src.index')}}"><img class="main-logo" src="{{asset('assetLogin/img/logo/logo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle"><i
                                                            class="educate-icon educate-bell"
                                                            aria-hidden="true"></i><span
                                                            class="indicator-nt"></span></a>
                                                    <div role="menu"
                                                        class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="{{asset('assetLogin/img/product/pro4.jpg')}}" alt="" />
                                                        <span class="admin-name">{{Auth::user()->USERNAME}}</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('panel/myprofile?myProfile='.Auth::user()->PROFILEUSERS_ID)}}">
                                                                MyProfile
                                                            </a>
                                                        </li>
                                                        <li> 
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                          document.getElementById('logout-form').submit();">
                                                             {{ __('Logout') }}
                                                            </a>
                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                             @csrf
                                                         </form>
                                                           
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle"><i
                                                            class="educate-icon educate-menu"></i></a>

                                                    <div role="menu"
                                                        class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active">
                                                                <a data-toggle="tab" href="#Notes">Notes</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-comments-o"></i> Latest
                                                                            Notes</h2>
                                                                        <p>You have 10 new message.</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="{{asset('assetLogin/img/contact/4.jpg')}}"
                                                                                                alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem
                                                                                                Ipsum is that it has a
                                                                                                more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45
                                                                                                pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="{{asset('assetLogin/img/contact/1.jpg')}}"
                                                                                                alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem
                                                                                                Ipsum is that it has a
                                                                                                more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45
                                                                                                pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Projects" class="tab-pane fade">
                                                                <div class="projects-settings-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-cube"></i> Latest projects
                                                                        </h2>
                                                                        <p> You have 20 projects. 5 not completed.</p>
                                                                    </div>
                                                                    <div
                                                                        class="project-st-list-area project-st-menu-scrollbar">
                                                                        <ul class="projects-st-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div
                                                                                            class="projects-st-heading">
                                                                                            <h2>Web Development</h2>
                                                                                            <p> The point of using Lorem
                                                                                                Ipsum is that it has a
                                                                                                more or less normal.</p>
                                                                                            <span
                                                                                                class="project-st-time">1
                                                                                                hours ago</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="projects-st-content">
                                                                                            <p>Completion with: 28%</p>
                                                                                            <div
                                                                                                class="progress progress-mini">
                                                                                                <div style="width: 28%;"
                                                                                                    class="progress-bar progress-bar-danger hd-tp-1">
                                                                                                </div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm -
                                                                                                12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div
                                                                                            class="projects-st-heading">
                                                                                            <h2>Software Development
                                                                                            </h2>
                                                                                            <p> The point of using Lorem
                                                                                                Ipsum is that it has a
                                                                                                more or less normal.</p>
                                                                                            <span
                                                                                                class="project-st-time">2
                                                                                                hours ago</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="projects-st-content project-rating-cl">
                                                                                            <p>Completion with: 68%</p>
                                                                                            <div
                                                                                                class="progress progress-mini">
                                                                                                <div style="width: 68%;"
                                                                                                    class="progress-bar hd-tp-2">
                                                                                                </div>
                                                                                            </div>
                                                                                            <p>Project end: 4:00 pm -
                                                                                                12.06.2014</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li>
                                            <a href="index-1.html">Home
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#inputForm" href="#">Input Form <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="inputForm" class="collapse dropdown-header-top">
                                                <li><a href="add-bidangkeahlian.html">Bidang Keahlian</a></li>
                                                <li><a href="add-bidangUMKM.html">Bidang UMKM</a></li>
                                                <li><a href="add-department.html">Jenis Kegiatan</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#inputForm" href="#">Form Permintaan
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="inputForm" class="collapse dropdown-header-top">
                                                <li><a href="add-inputPermintaan.html">Input Permintaan</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#inputForm" href="#">Data <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="inputForm" class="collapse dropdown-header-top">
                                                <li><a href="add-dataNarasumber.html">Narasumber</a></li>
                                                <li><a href="add-dataUMKM.html">UMKM</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            @foreach ($profileNarasumber as $nama)
                                            <h3>Profile {{$nama->USERNAME}}</h3>
                                            @endforeach
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">MyProfile</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($profileNarasumber as $itemNarasumber)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="{{asset('assetLogin/img/profile/'.$itemNarasumber->GAMBAR)}}" width="400px" height="400px" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            @if ($itemNarasumber->STATUSUSER == "UMKM")
                                            <p><b>Nama</b><br /> {{$itemNarasumber->NAMAUMKM}}</p>
                                            @elseif($itemNarasumber->STATUSUSER == "NARASUMBER")
                                            <p><b>Nama</b><br /> {{$itemNarasumber->NAMALENGKAP}}</p>
                                            @else
                                            <p><b>Nama</b><br /> {{$itemNarasumber->NAMALENGKAP}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        @if ($itemNarasumber->STATUSUSER == "UMKM")
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Lembaga</b><br /> {{$itemNarasumber->NAMAUMKM}}</p>
                                        </div>
                                        @elseif ($itemNarasumber->STATUSUSER == "NARASUMBER")
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Tanggal Lahir</b><br /> {{ \Carbon\Carbon::parse($itemNarasumber->TANGGALLAHIR)->format('d-m-Y')}}</p>
                                        </div>                                            
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Email</b><br />{{$itemNarasumber->email}}<br></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            @if ($itemNarasumber->STATUSUSER == "NARASUMBER")
                                            <p><b>Handphone</b>
                                                <i class="fa fa-mobile fa-lg" aria-hidden="true"></i><br />
                                                {{$itemNarasumber->NOHP}}</p>
                                            @elseif($itemNarasumber->STATUSUSER == "UMKM")
                                            <p><b>Telepon Lembaga</b>
                                                <i class="fa fa-phone fa-lg" aria-hidden="true"></i><br />
                                                {{$itemNarasumber->NOHPUMKM}}</p>
                                            @else
                                                <p><b>Handphone</b>
                                                <i class="fa fa-mobile fa-lg" aria-hidden="true"></i><br />
                                                {{$itemNarasumber->NOHP}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            @if ($itemNarasumber->STATUSUSER == "UMKM")
                                            <hr>
                                            <p><b>Alamat Lembaga</b><br />
                                                {{$itemNarasumber->ALAMATUMKM}}
                                            </p>
                                            @elseif($itemNarasumber->STATUSUSER == "NARASUMBER")
                                            <hr>
                                            <p><b>Jenis Jelamin</b><br />
                                                {{$itemNarasumber->JENISKL}}
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#Biography">Biography</a></li>
                                <li><a href="#reviews"> Activity</a></li>
                                <li><a href="#permintaan">Permintaan</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="Biography">
                                    <div class="row">
                                        @foreach ($profileNarasumber as $bioProfil)
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="content-profile">
                                                            <p align="justify">{{$bioProfil->BIOGRAFI}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="skill-title">
                                                                    <h2>Keahlian</h2>
                                                                    <hr />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="progress-skill">
                                                                    <h2>*Java</h2>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="progress-skill">
                                                                    <h2>*Php</h2>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="progress-skill">
                                                                    <h2>*Laravel</h2>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="progress-skill">
                                                                    <h2>*React Native</h2>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="progress-skill">
                                                                    <h2>*Flutter</h2>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="progress-skill">
                                                                    <h2>*Kotlin</h2>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="progress-skill">
                                                                    <h2>*React JS</h2>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="progress-skill">
                                                                    <h2>*Progressive Web Apps</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/contact/1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date"> Mon Jan 26 2015 - 18:39:23
                                                            </span>
                                                            <span class="message-content">Lorem ipsum dolor sit amet,
                                                                consectetuer adipiscing elit, sed diam nonummy nibh
                                                                euismod tincidunt ut laoreet dolore magna aliquam erat
                                                                volutpat.
                                                            </span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i
                                                                        class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-success"><i
                                                                        class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/contact/2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Karl Jordan </a>
                                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36
                                                            </span>
                                                            <span class="message-content">
                                                                Many desktop publishing packages and web page editors
                                                                now use Lorem Ipsum as their default model text, and a
                                                                search for 'lorem ipsum' will uncover.
                                                            </span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i
                                                                        class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i
                                                                        class="fa fa-heart"></i> Love</a>
                                                                <a class="btn btn-xs btn-primary"><i
                                                                        class="fa fa-pencil"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/contact/3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36
                                                            </span>
                                                            <span class="message-content">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration.
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/contact/4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Alice Jordan </a>
                                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36
                                                            </span>
                                                            <span class="message-content">
                                                                All the Lorem Ipsum generators on the Internet tend to
                                                                repeat predefined chunks as necessary, making this the
                                                                first true generator on the Internet.
                                                                It uses a dictionary of over 200 Latin words.
                                                            </span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i
                                                                        class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-warning"><i
                                                                        class="fa fa-eye"></i> Nudge</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/contact/1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Mark Smith </a>
                                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36
                                                            </span>
                                                            <span class="message-content">
                                                                All the Lorem Ipsum generators on the Internet tend to
                                                                repeat predefined chunks as necessary, making this the
                                                                first true generator on the Internet.
                                                                It uses a dictionary of over 200 Latin words.
                                                            </span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i
                                                                        class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-success"><i
                                                                        class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/contact/2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Karl Jordan </a>
                                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36
                                                            </span>
                                                            <span class="message-content">
                                                                Many desktop publishing packages and web page editors
                                                                now use Lorem Ipsum as their default model text, and a
                                                                search for 'lorem ipsum' will uncover.
                                                            </span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i
                                                                        class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i
                                                                        class="fa fa-heart"></i> Love</a>
                                                                <a class="btn btn-xs btn-primary"><i
                                                                        class="fa fa-pencil"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/contact/3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36
                                                            </span>
                                                            <span class="message-content">
                                                                There are many variations of passages of Lorem Ipsum
                                                                available, but the majority have suffered alteration.
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/contact/4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Alice Jordan </a>
                                                            <span class="message-date"> Fri Jan 25 2015 - 11:12:36
                                                            </span>
                                                            <span class="message-content">
                                                                All the Lorem Ipsum generators on the Internet tend to
                                                                repeat predefined chunks as necessary, making this the
                                                                first true generator on the Internet.
                                                                It uses a dictionary of over 200 Latin words.
                                                            </span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i
                                                                        class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i
                                                                        class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="permintaan">
                                    <div class="row">
                                        @foreach ($profileNarasumber as $profile)
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <form action="{{route('detailnarasumber.store')}}" method="POST" >
                                                            @csrf
                                                                <div class="form-group">
                                                                    <label>ID UMKM Anda</label>
                                                                    <input type="text" name="idUMKM" class="form-control" value="{{Auth::user()->PROFILEUSERS_ID}}" placeholder="ID UMKM" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>ID Narasumber</label>
                                                                    <input type="text" class="form-control" name="idNarasumber" value="{{$idNarsumber}}"  placeholder="ID Narsumber" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Keterangan Masalah</label>
                                                                    <textarea name="permasalahanUMKM" placeholder="Keterangan Masalah">
                                                                    </textarea>
                                                                </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                            @foreach ($profileUMKM as $item)
                                                                <div class="form-group">
                                                                    <label>No Telp</label>
                                                                    <input type="text" class="form-control text-left" name="tlpUMKM" value="{{$item->NOHPUMKM}}"  maxlength="13" placeholder="Handphone" readonly>
                                                                </div>
                                                            @endforeach
                                                                <div class="form-group chosen-select-single">
                                                                    <label>Permasalahan</label>
                                                                    <select data-placeholder="Choose a Country..." class=" form-group chosen-select" multiple="" tabindex="-1"">
                                                                            <option value="">Select</option>
                                                                            <option value="United States">United States</option>
                                                                            <option value="United Kingdom">United Kingdom</option>
                                                                            <option value="Afghanistan">Afghanistan</option>
                                                                            <option value="Aland Islands">Aland Islands</option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="American Samoa">American Samoa</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Antarctica">Antarctica</option>
                                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrain">Bahrain</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="Belarus">Belarus</option>
                                                                            <option value="Belgium">Belgium</option>
                                                                            <option value="Belize">Belize</option>
                                                                            <option value="Benin">Benin</option>
                                                                    </select>
                                                                </div>
                                                    </div>
                                                        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <br>
                                                            <div class="payment-adress mg-t-15">
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
@endsection

@section('customScript')
        <!-- jquery
		============================================ -->
        <script src="{{asset('assetLogin/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/bootstrap.min.js')}}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/wow.min.js')}}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/jquery-price-slider.js')}}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/jquery.meanmenu.js')}}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/owl.carousel.min.js')}}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/jquery.sticky.js')}}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/jquery.scrollUp.min.js')}}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/metisMenu/metisMenu-active.js')}}"></script>
        <!-- touchspin JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/touchspin/touchspin-active.js')}}"></script>
        <!-- colorpicker JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/colorpicker/jquery.spectrum.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/colorpicker/color-picker-active.js')}}"></script>
        <!-- datapicker JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/datapicker/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('assetLogin/js/datapicker/datepicker-active.js')}}"></script>
        <!-- input-mask JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/input-mask/jasny-bootstrap.min.js')}}"></script>
        <!-- chosen JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/chosen/chosen.jquery.js')}}"></script>
        <script src="{{asset('assetLogin/js/chosen/chosen-active.js')}}"></script>
        <!-- select2 JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/select2/select2.full.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/select2/select2-active.js')}}"></script>
        <!-- ionRangeSlider JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/ionRangeSlider/ion.rangeSlider.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/ionRangeSlider/ion.rangeSlider.active.js')}}"></script>
        <!-- rangle-slider JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/rangle-slider/jquery-ui-1.10.4.custom.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/rangle-slider/jquery-ui-touch-punch.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/rangle-slider/rangle-active.js')}}"></script>
        <!-- knob JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/knob/jquery.knob.js')}}"></script>
        <script src="{{asset('assetLogin/js/knob/knob-active.js')}}"></script>
        <!-- tab JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/tab.js')}}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/plugins.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/main.js')}}"></script>
        <!-- tawk chat JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/tawk-chat.js')}}"></script>
        <!-- date picker-->
        <script src="{{asset('myjs/datepicker.js')}}"></script>

@endsection