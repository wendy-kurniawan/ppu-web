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
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/select2/select2.min.css')}}">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('assetLogin/css/chosen/bootstrap-chosen.css')}}">
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
            @include('layouts.mobileNav')
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
                                @if (Auth::user()->STATUSUSER == "NARASUMBER")
                                <li><a href="#activityNara"> Activity</a></li>
                                <li><a href="#activitySkills"> Update Keahlian</a></li>
                                @endif
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
                                                        <div class="skill-title">
                                                            <h2>Deskripsi Singkat</h2>
                                                            <hr/>
                                                        </div>
                                                        <div class="content-profile">
                                                            <p align="justify">{{$bioProfil->BIOGRAFI}}</p>
                                                            @if (Auth::user()->STATUSUSER == "ADMIN")
                                                                <p align="justify">Saya Admin,Mengontrol Perilaku User</p>                                                                
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                @if (Auth::user()->STATUSUSER == "NARASUMBER")
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
                                                            @foreach ($Narasumber as $item)
                                                                @foreach ($item->Skills as $itemSkills)
                                                                    
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="progress-skill">
                                                                        <h2>*{{$itemSkills->NAMASKILL}}</h2>
                                                                    </div>
                                                                </div>
                                                                
                                                                @endforeach
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="activityNara">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                    @foreach ($Narasumber as $itemActivity)
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/profile/'.$itemActivity->GAMBAR)}}" alt="">
                                                        </div>
                                                        @foreach ($itemActivity->kNarasumber as $activity)
                                                            <div class="message">
                                                                <a class="message-author" href="#"> {{$activity->JUDULACARA}} </a>
                                                                <span class="message-date">{{ \Carbon\Carbon::parse($activity->created_at)->format('d M Y')}}
                                                                </span>
                                                                <span class="message-content">
                                                                    {{$activity->KETKEGIATAN}}
                                                                </span>
                                                                {{-- <div class="m-t-md mg-t-10">
                                                                    <a class="btn btn-xs btn-default"><i
                                                                            class="fa fa-thumbs-up"></i> Like </a>
                                                                    <a class="btn btn-xs btn-success"><i
                                                                            class="fa fa-heart"></i> Love</a>
                                                                </div> --}}
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="activitySkills">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form action="{{route('myprofile.store')}}" method="POST">
                                                            <input type="hidden" name="statUser" value="{{Auth::user()->STATUSUSER}}">
                                                            <input type="hidden" name="idProfile" value="{{Auth::user()->PROFILEUSERS_ID}}">
                                                            @csrf
                                                            <div class="form-group">
                                                                    <label>Tambah Bidang Keahlian / Skills</label>
                                                                    <select name="skills[]" data-placeholder="Pilih Salah Satu" class="form-control chosen-select" multiple="multiple" tabindex="-1">
                                                                        @foreach ($dataSkills as $itemSkills)
                                                                        <option value="{{$itemSkills->ID_SKILL}}">{{$itemSkills->NAMASKILL}}</option>
                                                                        @endforeach
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
                                                            @if($profile->STATUSUSER == "ADMIN")
                                                                <div class="form-group">
                                                                    <label>No Telp</label>
                                                                    <input type="text" class="form-control" value="{{$profile->NOHPUMKM}}" name="profileTelpUMKM" maxlength="13" placeholder="No Tlp UMKM">
                                                                </div>
                                                            @elseif ($profile->STATUSUSER == "UMKM")
                                                                <div class="form-group">
                                                                    <label>Alamat Lembaga</label>
                                                                    <input type="text" name="addrsLembaga" value="{{$profile->ALAMATUMKM}}" class="form-control"
                                                                        placeholder="Alamat Lembaga">
                                                                </div>
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
                                                                    <input type="text" class="form-control" name="profileHandphoneNarasumber" value="{{$profile->NOHP}}" maxlength="13" placeholder="Handphone">
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
                                                                        <option value=" ">Select Gender</option>
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
                                                            <label>Tanggal Lahir</label>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="tglLahirprofile" value="{{$profile->TANGGALLAHIR}}" id="datepicker" placeholder="yyyy-mm-dd">
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
        <!--Jquery UI-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        <!-- chosen JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/chosen/chosen.jquery.js')}}"></script>
        <script src="{{asset('assetLogin/js/chosen/chosen-active.js')}}"></script>
        <!-- select2 JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/select2/select2.full.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/select2/select2-active.js')}}"></script>
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
        <!-- date picker-->
        <script src="{{asset('myjs/datepicker.js')}}"></script>

@endsection