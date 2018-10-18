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

    <!-- DataTables CSS -->
    <link href="{{asset('vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">

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
                            <a href="{{ route('dashboard_user', "camp") }}" target="_user"><i class="fa fa-user"></i> Users </a>
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
                            <a href="/dashboard_blog_list"><i class="fa fa-user"></i> Blogs </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard_experience', "camp") }}" target="_surveylist"><i class="fa fa-user"></i> Experiences </a>
                        </li>
                        <li>
                            <a href="/official-dashboard" target="_blank"><i class="fa fa-dashboard fa-fw" ></i> To Official page</a>
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Blogs & Photo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('upload.file', "camp-picture") }}" target="upload_photo"><i class="fa fa-upload"></i> Upload Photo </a>
                                </li>
                                <li>
                                     <a href="{{ route('upload.file', "camp-essay") }}" target="Daily"><i class="fa fa-upload"></i>Daily Essay </a>
                                </li>
                                <li>
                                     <a href="{{ route('speech.file', "first") }}" target="Daily"><i class="fa fa-upload"></i>Entrance Speech </a>
                                </li>
                                <li>
                                     <a href="{{ route('speech.file', "graduation") }}" target="Daily"><i class="fa fa-upload"></i>Graduation Speech </a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "graduation") }}" target="Daily"><i class="fa fa-upload"></i>Graduation certificate</a>
                                </li>
                                <li>
                                     <a href="{{ route('pdf.file', "result") }}" target="Daily"><i class="fa fa-upload"></i>Result sheets</a>
                                </li>
                                <li>
                                     <a href="/blog/create" target="Daily"><i class="fa fa-upload"></i>Blogs </a>
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

     <!-- DataTables JavaScript -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('vendor/jquery/default.js') }}"></script>
</body>
</html>