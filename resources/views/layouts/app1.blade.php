<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
{{--    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">--}}
    <link rel="stylesheet" href="{{ asset('img/apple-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('img/favicon.png') }}">
{{--    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Dashboard PRO by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

{{--    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />--}}

    <!--  Paper Dashboard core CSS    -->
    <link rel="stylesheet" href="{{ asset('css/paper-dashboard.css') }}">
{{--    <link href="../assets/css/paper-dashboard.css" rel="stylesheet"/>--}}


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
{{--    <link href="../assets/css/themify-icons.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">

    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>

</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                AD
            </a>

            <a href="#" class="simple-text logo-normal">
                Adminitrator
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
{{--                    {{ asset('img/default-avatar.png') }}--}}
                    <img src="{{ asset('img/default-avatar.png') }}" alt="">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        <span>
								{{ $user->username }}
		                        <b class="caret"></b>
							</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.profile') }}">
                                    <span class="sidebar-mini">Mp</span>
                                    <span class="sidebar-normal">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.profile') }}">
                                    <span class="sidebar-mini">Ep</span>
                                    <span class="sidebar-normal">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="sidebar-mini">S</span>
                                    <span class="sidebar-normal">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li>
                    <a data-toggle="collapse" href="#dashboardOverview">
                        <i class="ti-panel"></i>
                        <p>Collapse
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="dashboardOverview">
                        <ul class="nav">
                            <li>
                                <a href="#panda">
                                    <span class="sidebar-mini">C1</span>
                                    <span class="sidebar-normal">Collapse 1</span>
                                </a>
                            </li>
                            <li>
                                <span class="sidebar-mini">C2</span>
                                <span class="sidebar-normal">Collapse 2</span>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#dashboardCategory">
                        <i class="ti-layout-grid2"></i>
                        <p>Category
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="dashboardCategory">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.category') }}">
                                    <span class="sidebar-mini">LC</span>
                                    <span class="sidebar-normal">List Category </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.category.insert') }}">
                                    <span class="sidebar-mini">NC</span>
                                    <span class="sidebar-normal">New Category </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#dashboardProduct">
                        <i class="ti-package"></i>
                        <p>Products
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="dashboardProduct">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.products') }}">
                                    <span class="sidebar-mini">CL</span>
                                    <span class="sidebar-normal"> List Product</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route("admin.product.create") }}">
                                    <span class="sidebar-mini">NP</span>
                                    <span class="sidebar-normal">New Product </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#dashboardOrders">
                        <i class="ti-package"></i>
                        <p>Orders
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="dashboardOrders">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('admin.orders') }}">
                                    <span class="sidebar-mini">LO</span>
                                    <span class="sidebar-normal"> List Orders</span>
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="{{ route("admin.product.create") }}">--}}
{{--                                    <span class="sidebar-mini">NP</span>--}}
{{--                                    <span class="sidebar-normal">New Product </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#charts" style="color: orangered">Ecko Unltd</a>
                </div>
                <div class="collapse navbar-collapse">
                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <span class="notification">5</span>
                                <p class="hidden-md hidden-lg">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#not1">Notification 1</a></li>
                                <li><a href="#not2">Notification 2</a></li>
                                <li><a href="#not3">Notification 3</a></li>
                                <li><a href="#not4">Notification 4</a></li>
                                <li><a href="#another">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#settings" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                                <i class="ti-settings"></i>
                                <p class="hidden-md hidden-lg">
                                    Settings
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#not1">{{ $user->username }}</a></li>
                                <li><a href="#not2">Setting</a></li>
                                <li><a href="{{ route('logout') }}"
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
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    @yield('content')

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://fb.com/hunglephu83" target="_blank">
                                <span class="ti-facebook"></span><span class="icon-name">Phu Hung</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://fb.com/yuzumi.s.99" target="_blank">
                                <span class="ti-facebook"></span><span class="icon-name"> Nguyễn Huyền</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/lephung8399" target="_blank">
                                <span class="ti-github"></span><span class="icon-name"> Github</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://stackoverflow.com/" target="_blank">
                                <span class="ti-stack-overflow"></span><span class="icon-name"> Stack overflow</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.fb.com/hunglephu83" target="_blank"">Phu Hung</a>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>

<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}" ></script>
<script src="{{ asset('js/jquery-ui.min.js') }}" ></script>
<script src="{{ asset('js/perfect-scrollbar.min.js') }}" ></script>
<script src="{{ asset('js/bootstrap.min.js') }}" ></script>


{{--<script src="../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>--}}
{{--<script src="../assets/js/jquery-ui.min.js" type="text/javascript"></script>--}}
{{--<script src="../assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>--}}
{{--<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>--}}

<!--  Forms Validations Plugin -->
<script src="{{ asset('js/jquery.validate.min.js') }}" ></script>

{{--<script src="../assets/js/jquery.validate.min.js"></script>--}}

<!-- Promise Library for SweetAlert2 working on IE -->
{{--<script src="../assets/js/es6-promise-auto.min.js"></script>--}}
<script src="{{ asset('js/es6-promise-auto.min.js') }}" ></script>


<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
{{--<script src="../assets/js/moment.min.js"></script>--}}
<script src="{{ asset('js/moment.min.js') }}" ></script>


<!--  Date Time Picker Plugin is included in this js file -->
{{--<script src="../assets/js/bootstrap-datetimepicker.js"></script>--}}
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" ></script>


<!--  Select Picker Plugin -->
<script src="{{ asset('js/bootstrap-selectpicker.js') }}" ></script>

{{--<script src="../assets/js/bootstrap-selectpicker.js"></script>--}}

<!--  Switch and Tags Input Plugins -->
<script src="{{ asset('js/bootstrap-switch-tags.js') }}" ></script>

{{--<script src="../assets/js/bootstrap-switch-tags.js"></script>--}}

<!-- Circle Percentage-chart -->
<script src="{{ asset('js/jquery.easypiechart.min.js') }}" ></script>

{{--<script src="../assets/js/jquery.easypiechart.min.js"></script>--}}

<!--  Charts Plugin -->
<script src="{{ asset('js/chartist.min.js') }}" ></script>

{{--<script src="../assets/js/chartist.min.js"></script>--}}

<!--  Notifications Plugin    -->
<script src="{{ asset('js/bootstrap-notify.js') }}" defer></script>

{{--<script src="../assets/js/bootstrap-notify.js"></script>--}}

<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('js/sweetalert2.js') }}" ></script>

{{--<script src="../assets/js/sweetalert2.js"></script>--}}

<!-- Vector Map plugin -->
<script src="{{ asset('js/jquery-jvectormap.js') }}" ></script>
{{--<script src="../assets/js/jquery-jvectormap.js"></script>--}}

<!--  Google Maps Plugin    -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
{{--<script src="{{ asset('js/jquery-jvectormap.js') }}" defer></script>--}}

<!-- Wizard Plugin    -->
{{--<script src="../assets/js/jquery.bootstrap.wizard.min.js"></script>--}}
<script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}" ></script>

<!--  Bootstrap Table Plugin    -->
{{--<script src="../assets/js/bootstrap-table.js"></script>--}}
<script src="{{ asset('js/bootstrap-table.js') }}" ></script>

<!--  Plugin for DataTables.net  -->
{{--<script src="../assets/js/jquery.datatables.js"></script>--}}
<script src="{{ asset('js/jquery.datatables.js') }}" ></script>

<!--  Full Calendar Plugin    -->
{{--<script src="../assets/js/fullcalendar.min.js"></script>--}}
<script src="{{ asset('js/fullcalendar.min.js') }}" ></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
{{--<script src="../assets/js/paper-dashboard.js"></script>--}}
<script src="{{ asset('js/paper-dashboard.js') }}" ></script>

<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
{{--<script src="../assets/js/demo.js"></script>--}}
<script src="{{ asset('js/demo.js') }}" ></script>

</html>
