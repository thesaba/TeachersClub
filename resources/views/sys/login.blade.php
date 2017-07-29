
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
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">TeachersClub - შესვლა</h4>
                                <p class="category">შეიყვანეთ მომხმარებელი და პაროლი</p>
                            </div>
                            <div class="card-content">
                                <form method="POST" action="{!! route('postSysLogin') !!}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">მომხმარებელი</label>
                                                <input type="text" name="username" class="form-control">
                                                <span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">პაროლი</label>
                                                <input type="password" name="password" class="form-control">
                                                <span class="material-input"></span></div>
                                        </div>
                                    </div>

                                    {!! csrf_field() !!}

                                    <button type="submit" class="btn btn-primary pull-right">სისტემაში შესვლა</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
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
