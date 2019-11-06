@extends('layouts.appdashboard')
@section('title','List Permintaan')
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
        <!--Data Tables-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/vendor/modernizr-2.8.3.min.js')}}')}}"></script>
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
            @include('layouts/mobileNav')
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
                                                List Data Permintaan
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
                                            <li><span class="bread-blod">List Data Permintaan</span>
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
                                <li class="active"><a href="#listPermintaan">List Data Permintaan</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="listPermintaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                @if(Auth::User()->STATUSUSER == "ADMIN")
                                                    
                                                @elseif(Auth::User()->STATUSUSER == "NARASUMBER")
                                                    
                                                    <table id="example" class=" table display table-bordered responsive no-wrap" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    @if (Auth::User()->STATUSUSER == "ADMIN")
                                                                        
                                                                    @elseif (Auth::User()->STATUSUSER == "NARASUMBER")
                                                                        <th>Nama UMKM</th>
                                                                    @else
                                                                        <th>Nama Narasumber</th>
                                                                    @endif
                                                                    <th>Permasalahan</th>
                                                                    <th>Jenis Permsalahan</th>
                                                                    <th>Status Permintaan</th>
                                                                    <th>Tanggal Submit</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                <?php $no =1?>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($dataPNarasumber as $itemPermintaan)
                                                                <tr>
                                                                    <td>{{$no++}}</td>
                                                                    <td>{{$itemPermintaan->NAMAUMKMPMT}}</td>
                                                                    <td>{{$itemPermintaan->KETERANGANPMT}}</td>
                                                                    <td>
                                                                        @foreach ($itemPermintaan->IDMASALAH as $item)
                                                                        <span class="label label-primary">{{$item->JKMASALAH}}</span>
                                                                        @endforeach
                                                                    </td>
                                                                    <td class="text-center">
                                                                        @if ($itemPermintaan->STATUSPMT == "APPROVE")
                                                                            <span class="label label-success">{{$itemPermintaan->STATUSPMT}}</span>
                                                                        @elseif ($itemPermintaan->STATUSPMT == "REJECT")
                                                                            <span class="label label-danger">{{$itemPermintaan->STATUSPMT}}</span>
                                                                        @else
                                                                            <span class="label label-warning">{{$itemPermintaan->STATUSPMT}}</span>
                                                                        @endif
                                                                    </td>
                                                                <form id="add-department" action="{{route('listpenerimaan.store')}}" method="POST" class="add-department">
                                                                        @csrf
                                                                    <td>
                                                                        <input type="hidden" name="tglPMT" value="{{ \Carbon\Carbon::parse($itemPermintaan->created_at)->format('Y-m-d')}}">
                                                                        {{ \Carbon\Carbon::parse($itemPermintaan->created_at)->format('d M Y')}}
                                                                    </td>
                                                                    <td>
                                                                        <input type="hidden" name="idPermintaanNARASUMBER" value="{{$itemPermintaan->IDNARASUMBER}}">
                                                                        <input type="hidden" name="idPermintaanUMKM" value="{{$itemPermintaan->IDUMKM}}">
                                                                        @if ($itemPermintaan->STATUSPMT == "WAIT")
                                                                            <button type="submit" name="pApprove" value="APPROVE" class="btn btn-success">Approve</button>            
                                                                            <button type="submit" name="pReject" value="REJECT" class="btn btn-danger">Reject</button>
                                                                        @else
                                                                        <button type="submit" name="pApprove" value="APPROVE" class="btn btn-success" disabled>Approve</button>            
                                                                        <button type="submit" name="pReject" value="REJECT" class="btn btn-danger" disabled>Reject</button>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                 </form>                                                                                                            
                                                                @endforeach

                                                            </tbody>
    
                                                            <tfoot>
    
                                                            </tfoot>
                                                        </table>
                                                @elseif(Auth::User()->STATUSUSER == "UMKM")
                                                        <table id="example" class=" table display table-bordered responsive no-wrap" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Narasumber</th>
                                                                    <th>Permasalahan</th>
                                                                    <th>Jenis Permsalahan</th>
                                                                    <th>Status Permintaan</th>
                                                                    <th>Tanggal Submit</th>
                                                                </tr>
                                                                <?php $no =1?>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($dataPermintaan as $itemPermintaan)
                                                                <tr>
                                                                    <td>{{$no++}}</td>
                                                                    <td>{{$itemPermintaan->NAMANARASUMBER}}</td>
                                                                    <td>{{$itemPermintaan->KETERANGANPMT}}</td>
                                                                    <td>
                                                                        @foreach ($itemPermintaan->IDMASALAH as $item)
                                                                        <span class="label label-primary">{{$item->JKMASALAH}}</span>
                                                                        @endforeach
                                                                    </td>
                                                                    <td class="text-center">
                                                                        @if ($itemPermintaan->STATUSPMT == "APPROVE")
                                                                            <span class="label label-success">{{$itemPermintaan->STATUSPMT}}</span>
                                                                        @elseif ($itemPermintaan->STATUSPMT == "REJECT")
                                                                            <span class="label label-danger">{{$itemPermintaan->STATUSPMT}}</span>
                                                                        @else
                                                                            <span class="label label-warning">{{$itemPermintaan->STATUSPMT}}</span>
                                                                        @endif
                                                                    </td>

                                                                    <td>{{ \Carbon\Carbon::parse($itemPermintaan->created_at)->format('d M Y')}}</td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>
    
                                                            <tfoot>
    
                                                            </tfoot>
                                                        </table>
                                                    @else

                                                    @endif
                                                
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
        <!-- data table JS
            ============================================ -->
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/sparkline/jquery.charts-sparkline.js')}}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/calendar/fullcalendar-active.js')}}"></script>
        <!-- form validate JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/form-validation/jquery.form.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/form-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assetLogin/js/form-validation/form-active.js')}}"></script>
        <!-- tab JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/tab.js')}}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/plugins.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/main.js')}}"></script>
        {{-- My Custome js --}}
        <script src="{{asset('myjs/datatables.js')}}"></script>
@endsection