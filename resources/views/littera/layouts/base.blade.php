<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Littera</title>

    {!! Html::style('css/common.css') !!}
    {!! Html::style('css/admin.css') !!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('littera.dashboard.getIndex') }}">Littera</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Visit site</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="https://www.gravatar.com/avatar/{{ md5($current_user->email) }}?d=identicon&s=25"
                             alt="{{ $current_user->email }}" class="user-image" />
                        {{ $current_user->email }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('littera/users/'.$current_user->id) }}">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('auth/logout') }}">Logout</a></li>
                    </ul>
                </li>
                <li><a href="#" title="Settings"><span class="glyphicon glyphicon-cog"></span></a></li>
            </ul>
        </div>

    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#dashboard">Dashboard</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="#pages">Pages</a></li>
                <li><a href="#menu">Menus</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="#users">Users</a></li>
                <li><a href="#roles">Roles</a></li>
            </ul>
            <div class="sidebar-footer">
                <p class="text-muted text-center">
                    <small>
                        Powered by <a href="http://getlittera.com">Littera</a> {{ $littera_version }}
                    </small>
                </p>
            </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            @include('partials.alert')
            <p class="lead">CMS based on <a href="http://laravel.com/">Laravel framework</a></p>

            <h2 class="sub-header">Section title</h2>
        </div>
    </div>
</div>

{!! Html::script('js/vendor.js') !!}
{!! Html::script('js/app.js') !!}
</body>
</html>
