@extends('layouts.appdashboard')
@section('title','MyProfile')

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
                                                            <a class="dropdown-item"  href="{{ route('myprofile.index') }}"
                                                                onclick="event.preventDefault();
                                                                              document.getElementById('my-profile').submit();">
                                                                 {{ __('MyProfile') }}
                                                                </a>
                                                             <form id="my-profile" action="{{ route('myprofile.index') }}" method="GET" style="display: none;">
                                                                 @csrf
                                                                 <input type="text" name="myProfile" value="{{Auth::user()->PROFILEUSERS_ID}}"/>
                                                             </form>
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
                                            <h3>Profile Anda</h3>
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
                    @foreach ($users as $itemUsers)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <h3>Profile</h3>
                                <span>{{$itemUsers->STATUSUSER}}</span>
                                <img src="{{asset('assetLogin/img/profile/'.$itemUsers->GAMBAR)}}" width="400px" height="400px" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            @if ($itemUsers->STATUSUSER == "UMKM")
                                            <p><b>Nama</b><br /> {{$itemUsers->NAMAUMKM}}</p>
                                            @elseif($itemUsers->STATUSUSER == "NARASUMBER")
                                            <p><b>Nama</b><br /> {{$itemUsers->NAMALENGKAP}}</p>
                                            @else
                                            <p><b>Nama</b><br /> {{$itemUsers->NAMALENGKAP}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        @if ($itemUsers->STATUSUSER == "UMKM")
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Lembaga</b><br /> {{$itemUsers->NAMAUMKM}}</p>
                                        </div>
                                        @elseif ($itemUsers->STATUSUSER == "NARASUMBER")
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Tanggal Lahir</b><br /> {{ \Carbon\Carbon::parse($itemUsers->TANGGALLAHIR)->format('d-m-Y')}}</p>
                                        </div>                                            
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Email</b><br />{{$itemUsers->email}}<br></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            @if ($itemUsers->STATUSUSER == "NARASUMBER")
                                            <p><b>Handphone</b>
                                                <i class="fa fa-mobile fa-lg" aria-hidden="true"></i><br />
                                                {{$itemUsers->NOHP}}</p>
                                            @elseif($itemUsers->STATUSUSER == "UMKM")
                                            <p><b>Telepon Lembaga</b>
                                                <i class="fa fa-phone fa-lg" aria-hidden="true"></i><br />
                                                {{$itemUsers->NOHPUMKM}}</p>
                                            @else
                                                <p><b>Handphone</b>
                                                <i class="fa fa-mobile fa-lg" aria-hidden="true"></i><br />
                                                {{$itemUsers->NOHP}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            @if ($itemUsers->STATUSUSER == "UMKM")
                                            <hr>
                                            <p><b>Alamat Lembaga</b><br />
                                                {{$itemUsers->ALAMATUMKM}}
                                            </p>
                                            @elseif($itemUsers->STATUSUSER == "NARASUMBER")
                                            <hr>
                                            <p><b>Jenis Jelamin</b><br />
                                                {{$itemUsers->JENISKL}}
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
                                <li><a href="#updateProfile">Update Profile</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="Biography">
                                    <div class="row">
                                        @foreach ($users as $bioProfil)
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
                                <div class="product-tab-list tab-pane fade" id="updateProfile">
                                    <div class="row">
                                        @foreach ($users as $profile)
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <form action="{{route('myprofile.store')}}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="statUser" value="{{$profile->STATUSUSER}}">
                                                            <input type="hidden" name="idProfile" value="{{$profile->PROFILE_ID}}">
                                                            @if ($profile->STATUSUSER == "UMKM")
                                                                <div class="form-group">
                                                                    <label>Alamat Lembaga</label>
                                                                    <input type="text" name="addrsLembaga" value="{{$profile->ALAMATUMKM}}" class="form-control"
                                                                        placeholder="Alamat Lembaga">
                                                                </div>
                                                            @endif
                                                             @if ($profile->STATUSUSER =="UMKM")
                                                                <div class="form-group">
                                                                    <label>No Telp UMKM</label>
                                                                    <input type="text" class="form-control" value="{{$profile->NOHPUMKM}}" name="profileTelpUMKM" maxlength="13" placeholder="No Tlp UMKM">
                                                                </div>
                                                            @elseif($profile->STATUSUSER =="NARASUMBER")
                                                                <div class="form-group">
                                                                    <label>Biography</label>
                                                                    <textarea name="bioNarasumber" placeholder="Biography">
                                                                        {{$profile->BIOGRAFI}}
                                                                    </textarea>
                                                                </div>

                                                                 <div class="form-group">
                                                                    <label>HandPhone</label>
                                                                    <input type="text" class="form-control" name="profileHandphoneNarasumber" maxlength="13" placeholder="Handphone">
                                                                </div>
                                                            @endif
                                                        <div class="file-upload-inner ts-forms">
                                                            <div class="input prepend-big-btn">
                                                                <label class="icon-right" for="prepend-big-btn">
                                                                    <i class="fa fa-download"></i>
                                                                </label>
                                                                <div class="file-button">
                                                                    Browse
                                                                    <input type="file" name="docProfile"
                                                                        onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                </div>
                                                                <input type="text" id="prepend-big-btn"
                                                                    placeholder="no file selected">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if ($profile->STATUSUSER == "NARASUMBER")
                                                    <div class="col-lg-6">
                                                            <label>Jenis Kelamin</label>
                                                            <div class="form-group">
                                                                <select name="profileJK" class="form-control">
                                                                    @if ($profile->JENISKL == "")
                                                                        <option>Select Gender</option>
                                                                        <option value="Perempuan">Perempuan</option>
                                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                                    @elseif ($profile->JENISKL == "Laki-Laki")
                                                                        <option value="{{$profile->JENISKL}}">{{$profile->JENISKL}}</option>
                                                                        <option value="Perempuan">Perempuan</option>
                                                                    @else
                                                                    <option value="{{$profile->JENISKL}}">{{$profile->JENISKL}}</option>
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    @endif
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
        <!-- morrisjs JS
		============================================ -->
        <script src="{{asset('assetLogin/js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/sparkline/jquery.charts-sparkline.js')}}"></script>
        <!-- calendar JS
		============================================ -->
        <script src="{{asset('assetLogin/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/calendar/fullcalendar-active.js')}}"></script>
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
@endsection