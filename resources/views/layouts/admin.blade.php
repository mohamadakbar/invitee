<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Invitee</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/vendors/') }}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/vendors/') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('/vendors/') }}/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/vendors/') }}/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('/vendors/') }}/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('/vendors/') }}/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Switchery -->
	<link href="{{ asset('/vendors/') }}/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{ asset('/vendors/') }}/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('/build/') }}/css/custom.min.css" rel="stylesheet">

    <!-- Datatables -->

    <link href="{{ asset('/vendors/') }}/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/vendors/') }}/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/vendors/') }}/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/vendors/') }}/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/vendors/') }}/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Invitee</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="template/img/about-bg.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ Auth::user()->name }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            {{-- <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li><a href="index2.html">Dashboard2</a></li>
                                    <li><a href="index3.html">Dashboard3</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home </a></li>
                            @if(Auth::user()->roles != 1)
                            <li><a href="{{ route('form') }}"><i class="fa fa-edit"></i> Undangan Saya </a>
                            @endif
                            </li>
{{--                            <li><a><i class="fa fa-desktop"></i> UI Elements <span--}}
{{--                                        class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="{{ route('undangan') }}">Lihat Undangan</a></li>--}}
{{--                                    <li><a href="media_gallery.html">Media Gallery</a></li>--}}
{{--                                    <li><a href="typography.html">Typography</a></li>--}}
{{--                                    <li><a href="icons.html">Icons</a></li>--}}
{{--                                    <li><a href="glyphicons.html">Glyphicons</a></li>--}}
{{--                                    <li><a href="widgets.html">Widgets</a></li>--}}
{{--                                    <li><a href="invoice.html">Invoice</a></li>--}}
{{--                                    <li><a href="inbox.html">Inbox</a></li>--}}
{{--                                    <li><a href="calendar.html">Calendar</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="tables.html">Tables</a></li>--}}
{{--                                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span--}}
{{--                                        class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="chartjs.html">Chart JS</a></li>--}}
{{--                                    <li><a href="chartjs2.html">Chart JS2</a></li>--}}
{{--                                    <li><a href="morisjs.html">Moris JS</a></li>--}}
{{--                                    <li><a href="echarts.html">ECharts</a></li>--}}
{{--                                    <li><a href="other_charts.html">Other Charts</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>--}}
{{--                                    <li><a href="fixed_footer.html">Fixed Footer</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
{{--                    {{ dd( }}--}}
                    @if(\Illuminate\Support\Facades\Auth::user()->roles == 1)
                    <div class="menu_section">
                        <h3>Admin Panel</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a href="{{ route('users') }}"><i class="fa fa-user"></i> User </a>
                            </li>
                            <li>
                                <a href="{{ route('paket') }}"><i class="fa fa-inbox"></i> Paket </a>
                            </li>
                            <li>
                                <a href="{{ route('menu') }}"><i class="fa fa-bars"></i> Menu </a>
                            </li>
{{--                            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="page_403.html">403 Error</a></li>--}}
{{--                                    <li><a href="page_404.html">404 Error</a></li>--}}
{{--                                    <li><a href="page_500.html">500 Error</a></li>--}}
{{--                                    <li><a href="plain_page.html">Plain Page</a></li>--}}
{{--                                    <li><a href="login.html">Login Page</a></li>--}}
{{--                                    <li><a href="pricing_tables.html">Pricing Tables</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span--}}
{{--                                        class="fa fa-chevron-down"></span></a>--}}
{{--                                <ul class="nav child_menu">--}}
{{--                                    <li><a href="#level1_1">Level One</a>--}}
{{--                                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>--}}
{{--                                        <ul class="nav child_menu">--}}
{{--                                            <li class="sub_menu"><a href="level2.html">Level Two</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="#level2_1">Level Two</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="#level2_2">Level Two</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#level1_2">Level One</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                        </ul>
                    </div>
                    @endif

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logosut" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                               id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:;"> Profile</a>
                                <a class="dropdown-item" href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                                <a class="dropdown-item" href="javascript:;">Help</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <li role="presentation" class="nav-item dropdown open">
                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                               data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                aria-labelledby="navbarDropdown1">
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item">
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                                        <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <div class="text-center">
                                        <a class="dropdown-item">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            @yield('content')

        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="{{ asset('/vendors/') }}/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="{{ asset('/vendors/') }}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('/vendors/') }}/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ asset('/vendors/') }}/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{ asset('/vendors/') }}/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="{{ asset('/vendors/') }}/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- morris.js -->
<script src="{{ asset('/vendors/') }}/raphael/raphael.min.js"></script>
<script src="{{ asset('/vendors/') }}/morris.js/morris.min.js"></script>
<!-- gauge.js -->
<script src="{{ asset('/vendors/') }}/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('/vendors/') }}/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- Skycons -->
<script src="{{ asset('/vendors/') }}/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{ asset('/vendors/') }}/Flot/jquery.flot.js"></script>
<script src="{{ asset('/vendors/') }}/Flot/jquery.flot.pie.js"></script>
<script src="{{ asset('/vendors/') }}/Flot/jquery.flot.time.js"></script>
<script src="{{ asset('/vendors/') }}/Flot/jquery.flot.stack.js"></script>
<script src="{{ asset('/vendors/') }}/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{ asset('/vendors/') }}/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{ asset('/vendors/') }}/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{ asset('/vendors/') }}/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{ asset('/vendors/') }}/DateJS/build/date.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('/vendors/') }}/moment/min/moment.min.js"></script>
<script src="{{ asset('/vendors/') }}/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('/build/') }}/js/custom.min.js"></script>
<!-- Switchery -->
<script src="{{ asset('/vendors/') }}/switchery/dist/switchery.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('/vendors/') }}/iCheck/icheck.min.js"></script>

<!-- bootstrap-daterangepicker -->
<script src="{{ asset('/vendors/') }}/moment/min/moment.min.js"></script>
<script src="{{ asset('/vendors/') }}/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="{{ asset('/vendors/') }}/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Datatables -->
<script src="{{ asset('/vendors/') }}/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="{{ asset('/vendors/') }}/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 5000);
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#myDatepicker').datetimepicker();
    });

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>

@stack('child-scripts')
</body>
</html>
