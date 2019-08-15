@extends('layouts.appdashboard')
@section('title','Permintaan')
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
        <script src="{{asset('assetLogin/js/vendor/modernizr-2.8.3.min.js')}}')}}"></script>
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
                                <li class="active"><a href="#inputPermintaan">Input Permintaan</a></li>
                                <li><a href="#formprogressPermintaan"> Progress Permintaan</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="inputPermintaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-department" action="#" class="add-department">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label>ID UMKM</label>
                                                                <input name="name" type="text" class="form-control"
                                                                    placeholder="ID UMKM">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Narasumber</label>
                                                                <select name="gender" class="form-control">
                                                                    <option value="none" selected="" disabled="">Pilih
                                                                        Narasumber</option>
                                                                    <option value="0">Marfua</option>
                                                                    <option value="1">Wendly</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Permasalahan UMKM</label>
                                                                <input type="text" name="permasalahanUMKM"
                                                                    class="form-control"
                                                                    placeholder="Permasalahan UMKM">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea placeholder="Keterangan.."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="data-table-area mg-b-15 product-tab-list tab-pane fade"
                                    id="formprogressPermintaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline13-list">
                                                <div class="sparkline13-hd">
                                                    <div class="main-sparkline13-hd">
                                                        <h1>Projects <span class="table-project-n">Data</span> Table
                                                        </h1>
                                                    </div>
                                                </div>
                                                <div class="sparkline13-graph">
                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                        <div id="toolbar">
                                                            <select class="form-control dt-tb">
                                                                <option value="">Export Basic</option>
                                                                <option value="all">Export All</option>
                                                                <option value="selected">Export Selected</option>
                                                            </select>
                                                        </div>
                                                        <table id="table" data-toggle="table" data-pagination="true"
                                                            data-search="true" data-show-columns="true"
                                                            data-show-pagination-switch="true" data-show-refresh="true"
                                                            data-key-events="true" data-show-toggle="true"
                                                            data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-show-export="true"
                                                            data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    <th data-field="state" data-checkbox="true"></th>
                                                                    <th data-field="id">ID</th>
                                                                    <th data-field="name" data-editable="true">Task</th>
                                                                    <th data-field="email" data-editable="true">Email
                                                                    </th>
                                                                    <th data-field="phone" data-editable="true">Phone
                                                                    </th>
                                                                    <th data-field="complete">Completed</th>
                                                                    <th data-field="task" data-editable="true">Task</th>
                                                                    <th data-field="date" data-editable="true">Date</th>
                                                                    <th data-field="price" data-editable="true">Price
                                                                    </th>
                                                                    <th data-field="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>1</td>
                                                                    <td>Web Development</td>
                                                                    <td>admin@uttara.com</td>
                                                                    <td>+8801962067309</td>
                                                                    <td class="datatable-ct"><span
                                                                            class="pie">1/6</span>
                                                                    </td>
                                                                    <td>10%</td>
                                                                    <td>Jul 14, 2017</td>
                                                                    <td>$5455</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>2</td>
                                                                    <td>Graphic Design</td>
                                                                    <td>fox@itpark.com</td>
                                                                    <td>+8801762067304</td>
                                                                    <td class="datatable-ct"><span
                                                                            class="pie">230/360</span>
                                                                    </td>
                                                                    <td>70%</td>
                                                                    <td>fab 2, 2017</td>
                                                                    <td>$8756</td>
                                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
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
        <script src="{{asset('assetLogin/js/data-table/bootstrap-table.js')}}"></script>
        <script src="{{asset('assetLogin/js/data-table/tableExport.js')}}"></script>
        <script src="{{asset('assetLogin/js/data-table/data-table-active.js')}}"></script>
        <script src="{{asset('assetLogin/js/data-table/bootstrap-table-editable.js')}}"></script>
        <script src="{{asset('assetLogin/js/data-table/bootstrap-editable.js')}}"></script>
        <script src="{{asset('assetLogin/js/data-table/bootstrap-table-resizable.js')}}"></script>
        <script src="{{asset('assetLogin/js/data-table/colResizable-1.5.source.js')}}"></script>
        <script src="{{asset('assetLogin/js/data-table/bootstrap-table-export.js')}}"></script>
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
        <!-- tawk chat JS
            ============================================ -->
        <script src="{{asset('assetLogin/js/tawk-chat.js')}}"></script>
@endsection