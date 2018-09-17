<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <!-- Stylesheet -->


    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>

</head>
<body>
      <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/dashboard" target="_blank"><i class="fa fa-dashboard fa-fw" ></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/register" target="_register"><i class="fa fa-registered"></i> Register</a>
                        </li>
                        <li>
                            <a href="/dashboard_user_list" target="_user"><i class="fa fa-user"></i> Users </a>
                        </li>
                        <li>
                            <a href="/dashboard_angecy_list" target="_agencylist"><i class="fa fa-user"></i> Agencies </a>
                        </li>
                        <li>
                            <a href="/dashboard_contact_list" target="_contactlist"><i class="fa fa-user"></i> Contacts </a>
                        </li>
                        <li>
                            <a href="/dashboard_survey_list" target="_surveylist"><i class="fa fa-user"></i> Surveys </a>
                        </li>
                        <li>
                            <a href="/dashboard_experience_list" target="_surveylist"><i class="fa fa-user"></i> Experiencs </a>
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>PDF<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                     <a href="{{ route('pdf.file', "of_entrance") }}" target="Daily"><i class="fa fa-upload"></i>Entrance Test</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_chart") }}" target="Daily"><i class="fa fa-upload"></i>Progressive chart</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_result") }}" target="Daily"><i class="fa fa-upload"></i>Result Examination</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_evaluation") }}" target="Daily"><i class="fa fa-upload"></i>Evaluation</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_graduation") }}" target="Daily"><i class="fa fa-upload"></i>Graduation Certification</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_class") }}" target="Daily"><i class="fa fa-upload"></i>Class schedule</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>PDF<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                     <a href="{{ route('pdf.file', "of_entrance") }}" target="Daily"><i class="fa fa-upload"></i>Entrance Test</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_chart") }}" target="Daily"><i class="fa fa-upload"></i>Progressive chart</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_result") }}" target="Daily"><i class="fa fa-upload"></i>Result Examination</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_evaluation") }}" target="Daily"><i class="fa fa-upload"></i>Evaluation</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_graduation") }}" target="Daily"><i class="fa fa-upload"></i>Graduation Certification</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "of_class") }}" target="Daily"><i class="fa fa-upload"></i>Class schedule</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                               
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
    
        @yield('content')
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('data/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>
</body>
</html>