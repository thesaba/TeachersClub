
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('assets/sys/img/apple-icon.png') !!}" />
    <link rel="icon" type="image/png" href="{!! asset('assets/sys/img/favicon.png') !!}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>TeachersClub - Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{!! asset('assets/sys/css/bootstrap.min.css') !!}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{!! asset('assets/sys/css/material-dashboard.css') !!}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{!! asset('assets/sys/css/demo.css') !!}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

        <div class="logo">
            <a href="{!! route('getSysDashboard') !!}" class="simple-text">
                TeachersClub
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="{!! route('getSysDashboard') !!}">
                        <i class="material-icons">dashboard</i>
                        <p>მთავარი</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">პროფილი</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                                <div class="ripple-container"></div></a>
                            <ul class="dropdown-menu">
                                <li><a href="{!! route('getLogout') !!}">გამოსვლა</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="navbar-form navbar-right" role="ძებნა">
                        <div class="form-group  is-empty">
                            <input type="text" class="form-control" placeholder="ძებნა">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i><div class="ripple-container"></div>
                        </button>
                    </form>
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
    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="{!! asset('assets/sys/js/jquery-3.1.0.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/sys/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/sys/js/material.min.js') !!}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{!! asset('assets/sys/js/chartist.min.js') !!}"></script>

<!--  Notifications Plugin    -->
<script src="{!! asset('assets/sys/js/bootstrap-notify.js') !!}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="{!! asset('assets/sys/js/material-dashboard.js') !!}"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{!! asset('assets/sys/js/demo.js') !!}"></script>

</html>
