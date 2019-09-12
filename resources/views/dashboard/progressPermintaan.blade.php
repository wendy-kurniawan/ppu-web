@extends('layouts.appdashboard')
@section('title','Progress Permintaan')
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
                                            <ul class="nav navbar-nav mai-top-nav">
                                            @include('layouts.listheaderinfo')                                                
                                            </ul>
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
            @include('layouts.mobileNav')
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="breadcome-heading">

                                            <h3>
                                                <i class="social-edu-ctn fa fa-pencil"></i>
                                                Pemerataan Pemberdayaan UMKM Input Permintaan
                                            </h3>

                                            <!-- <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..."
                                                    class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Input Permintaan</span>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design text-center">
                                <li class="active"><a href="#formprogressPermintaan">Progress Permintaan</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="data-table-area mg-b-15 product-tab-list tab-pane fade active in" id="formprogressPermintaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                <table id="example" class=" table display table-bordered responsive no-wrap" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Narasumber</th>
                                                                <th>Nama UMKM</th>
                                                                <th>Keterangan Permintaan</th>
                                                                <th>TLP UMKM</th>
                                                                <th>Status Permintaan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no=1; ?>
                                                            @foreach ($progressPermintaan as $itemProgress)
                                                            <div id="modalsMasalah{{ $itemProgress->IDMASALAH }}" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header header-color-modal bg-color-1">
                                                                                <h4 class="modal-title">Edit Nama Jenis Masalah</h4>
                                                                                <div class="modal-close-area modal-close-df">
                                                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form id="add-department" action="{{route('permintaan.update', $itemProgress->IDMASALAH)}}" method="POST" class="add-department">
                                                                                    @csrf
                                                                                    {{ method_field('PUT') }}
                                                                                    <div class="form-group">
                                                                                        <label>Edit Masalah</label>
                                                                                        <input type="hidden" name="idDB" value="{{$itemProgress->NO}}" class="form-control" readonly>
                                                                                        <input type="hidden" name="oldValue" value="{{$itemProgress->IDMASALAH}}" class="form-control" readonly>
                                                                                        <input name="namaMasalah" type="text" class="form-control" placeholder="Nama Masalah">
                                                                                    </div>

                                                                                </div>
                                                                            <div class="modal-footer">
                                                                                <button type="#" data-dismiss="modal" class="btn btn-info btn-md" >Cancel</button>
                                                                                <button type="submit" class="btn btn-success btn-md" >Process</button>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <tr>
                                                                <td>{{$no++}}</td>
                                                                <td>{{$itemProgress->NAMANARASUMBER}}</td>
                                                                <td>{{$itemProgress->NAMAUMKMPMT}}</td>
                                                                <td>{{$itemProgress->KETERANGANPMT}}</td>
                                                                <td>{{$itemProgress->TLPUMKM}}</td>
                                                                <td>
                                                                    @if ($itemProgress->STATUSPMT == "WAIT")
                                                                        <span class="label label-warning">{{$itemProgress->STATUSPMT}}</span>
                                                                    @elseif ($itemProgress->STATUSPMT == "REJECT")
                                                                        <span class="label label-danger">{{$itemProgress->STATUSPMT}}</span>
                                                                    @else
                                                                        <span class="label label-success">{{$itemProgress->STATUSPMT}}</span>
                                                                    @endif
                                                                
                                                                </td>
                                                                <td>
                                                                    <form method="POST" action="{{route('permintaan.destroy',$itemProgress->IDMASALAH)}}">
                                                                        @csrf
                                                                        {{ method_field('DELETE') }}
                                                                        {{-- <a href="#" class=" btn btn-warning btn-xs" data-toggle="modal" data-target="#modalsMasalah{{ $itemProgress->IDMASALAH}}">Edit</a> --}}
                                                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data?')" >Delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
        
                                                        </tfoot>
                                                </table>
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
@endsection