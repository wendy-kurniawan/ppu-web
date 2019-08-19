@extends('layouts.appdashboard')
@section('title','Profile UMKM')

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
        <!-- touchspin CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('assetLogin/css/touchspin/jquery.bootstrap-touchspin.min.css')}}">
        <!-- datapicker CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('assetLogin/css/datapicker/datepicker3.css')}}">
        <!-- forms CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('assetLogin/css/form/themesaller-forms.css')}}">
        <!-- colorpicker CSS
            ============================================ -->
        <link rel="stylesheet" href="css/colorpicker/colorpicker.css')}}">
        <!-- select2 CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('assetLogin/css/select2/select2.min.css')}}">
        <!-- chosen CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('assetLogin/css/chosen/bootstrap-chosen.css')}}">
        <!-- ionRangeSlider CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('assetLogin/css/ionRangeSlider/ion.rangeSlider.css')}}">
        <link rel="stylesheet" href="{{asset('assetLogin/css/ionRangeSlider/ion.rangeSlider.skinFlat.css')}}">
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
                                                @include('layouts.headerinfo')                                            
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
                                            @foreach ($profileUMKM as $nama)
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
                                            <li>
                                                <span class="bread-blod">Profile 
                                                @foreach ($profileUMKM as $namaUMKM)
                                                    {{$namaUMKM->NAMAUMKM}}
                                                @endforeach
                                                </span>
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
                    @foreach ($profileUMKM as $itemUMKM)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="{{asset('assetLogin/img/profile/'.$itemUMKM->GAMBAR)}}" width="400px" height="400px" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            @if ($itemUMKM->STATUSUSER == "UMKM")
                                            <p><b>Nama</b><br /> {{$itemUMKM->NAMAUMKM}}</p>
                                            @elseif($itemUMKM->STATUSUSER == "NARASUMBER")
                                            <p><b>Nama</b><br /> {{$itemUMKM->NAMALENGKAP}}</p>
                                            @else
                                            <p><b>Nama</b><br /> {{$itemUMKM->NAMALENGKAP}}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        @if ($itemUMKM->STATUSUSER == "UMKM")
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Lembaga</b><br /> {{$itemUMKM->NAMAUMKM}}</p>
                                        </div>
                                        @elseif ($itemUMKM->STATUSUSER == "NARASUMBER")
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            <p><b>Tanggal Lahir</b><br /> {{ \Carbon\Carbon::parse($itemUMKM->TANGGALLAHIR)->format('d-m-Y')}}</p>
                                        </div>                                            
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Email</b><br />{{$itemUMKM->email}}<br></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                            @if ($itemUMKM->STATUSUSER == "NARASUMBER")
                                            <p><b>Handphone</b>
                                                <i class="fa fa-mobile fa-lg" aria-hidden="true"></i><br />
                                                {{$itemUMKM->NOHP}}</p>
                                            @elseif($itemUMKM->STATUSUSER == "UMKM")
                                            <p><b>Telepon Lembaga</b>
                                                <i class="fa fa-phone fa-lg" aria-hidden="true"></i><br />
                                                {{$itemUMKM->NOHPUMKM}}</p>
                                            @else
                                                <p><b>Handphone</b>
                                                <i class="fa fa-mobile fa-lg" aria-hidden="true"></i><br />
                                                {{$itemUMKM->NOHP}}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="address-hr">
                                            @if ($itemUMKM->STATUSUSER == "UMKM")
                                            <hr>
                                            <p><b>Alamat Lembaga</b><br />
                                                {{$itemUMKM->ALAMATUMKM}}
                                            </p>
                                            @elseif($itemUMKM->STATUSUSER == "NARASUMBER")
                                            <hr>
                                            <p><b>Jenis Jelamin</b><br />
                                                {{$itemUMKM->JENISKL}}
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
                                <li><a href="#activityUMKM"> Activity</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="Biography">
                                    <div class="row">
                                        @foreach ($profileUMKM as $bioProfil)
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                            <div class="skill-title">
                                                                <h2>Deskripsi Singkat</h2>
                                                                <hr/>
                                                            </div>
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
                                <div class="product-tab-list tab-pane fade" id="activityUMKM">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                    @foreach ($activity as $itemactivity)
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/profile/'.$itemactivity->GAMBARNARASUMBER)}}" alt="">
                                                        </div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> {{$itemactivity->NAMANARASUMBER}} </a>
                                                            <span class="message-date">
                                                                {{ \Carbon\Carbon::parse($itemactivity->created_at)->format('d M Y')}}
                                                            </span>
                                                            <span class="message-content">
                                                                {{$itemactivity->KETERANGANPMT}}
                                                            </span>
                                                            <span>
                                                                <small><b>Jenis Masalah</b></small><br>
                                                                @foreach ($itemactivity->masalah as $item)
                                                                    <span class="label label-primary">{{$item->JKMASALAH}}</span>
                                                                @endforeach
                                                            </span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a href="https://www.google.com" class="btn btn-xs btn-default">
                                                                    <i class="fa fa-info"></i> Selengkapnya 
                                                                </a>
                                                                <a class="btn btn-xs btn-success"><i
                                                                    class="fa fa-heart"></i> Love</a>
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
        <!-- date picker-->
        <script src="{{asset('myjs/datepicker.js')}}"></script>

@endsection