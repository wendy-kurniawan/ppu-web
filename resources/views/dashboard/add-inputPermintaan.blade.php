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
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">Project
                                                        <span class="angle-down-topmenu"><i
                                                                class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                        <a href="#" class="dropdown-item">Contact Support</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li>
                                            </ul>
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
                                                        <span class="admin-name">Prof.Anderson</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <a href="{{route('myprofile.index')}}">
                                                                <span class="edu-icon edu-user-rounded author-log-ic">
                                                                </span>MyProfile</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="edu-icon edu-locked author-log-ic">
                                                                </span>LogOut</a>
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
                                                            <li class="active"><a data-toggle="tab"
                                                                    href="#Notes">Notes</a>
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
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a
                                    href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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