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
        @include('layouts.mobileLogo')
        
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
                                <li><a href="#activityNarasumber"> Activity</a></li>
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
                                                                @foreach ($bioProfil->Skills as $itemSkills)
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                    <div class="progress-skill">
                                                                        <h2>*{{$itemSkills->NAMASKILL}}</h2>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="activityNarasumber">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                @foreach ($profileNarasumber as $itemActivity)
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                            <img class="message-avatar" src="{{asset('assetLogin/img/profile/'.$itemActivity->GAMBAR)}}" alt="">
                                                        </div>
                                                        @foreach ($itemActivity->kNarasumber as $Activity)
                                                            <div class="message">
                                                                <a class="message-author" href="#"> {{$Activity->JUDULACARA}} </a>
                                                                <span class="message-date">{{ \Carbon\Carbon::parse($Activity->created_at)->format('d M Y')}}
                                                                </span>
                                                                <span class="message-content">
                                                                    {{$Activity->KETKEGIATAN}}
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
                                                                    <label>Nama UMKM ANDA</label>
                                                                    <input type="hidden" name="idUMKM" class="form-control" value="{{Auth::user()->PROFILEUSERS_ID}}" placeholder="ID UMKM" readonly>
                                                                    <input type="text" name="namaUMKM" class="form-control" value="{{Auth::user()->NAMAUMKM}}" placeholder="NAMA UMKM" readonly>                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kepada Narasumber</label>
                                                                    <input type="hidden" class="form-control" name="imgNarasumber" value="{{$profile->GAMBAR}}" placeholder="Gambar Narasumber" readonly>
                                                                    <input type="hidden" class="form-control" name="idNarasumber" value="{{$idNarsumber}}"  placeholder="ID Narsumber" readonly>
                                                                    <input type="text" class="form-control" name="namaNarasumber" value="{{$profile->NAMALENGKAP}}"  placeholder="Nama Narsumber" readonly>                                                                
                                                                </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                            @foreach ($profileUMKM as $item)
                                                                <div class="form-group">
                                                                    <label>No Telp</label>
                                                                    <input type="text" class="form-control text-left" name="tlpUMKM" value="{{$item->NOHPUMKM}}"  maxlength="13" placeholder="Handphone" readonly>
                                                                </div>
                                                            @endforeach
                                                            <div class="form-group">
                                                                    <label>Jenis Pemasalahan</label>
                                                                    <select name="jkMasalah[]" data-placeholder="Pilih Salah Satu" class="form-control chosen-select" multiple="multiple" tabindex="-1">
                                                                            @foreach ($jenisMasalah as $itemJenisMasalah)
                                                                            <option value="{{$itemJenisMasalah->NAMAMASALAH}}">{{$itemJenisMasalah->NAMAMASALAH}}</option>
                                                                            @endforeach
                                                                    </select>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Keterangan Masalah</label>
                                                            <textarea name="permasalahanUMKM" class="form-control" placeholder="Keterangan Masalah"></textarea>
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
        <!-- date picker-->
        <script src="{{asset('myjs/datepicker.js')}}"></script>

@endsection