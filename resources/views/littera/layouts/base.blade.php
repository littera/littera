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
    {!! Html::style('css/littera.css') !!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section class="base">
    <aside class="sidebar">
        <div class="sidebar__brand">
            <figure class="text-center">
                <h3 class="brand__heading"><a href="{{ route('littera.dashboard.getIndex') }}">Littera</a></h3>
                <figcaption><small class="text-muted">CMS based on Laravel 5.1</small></figcaption>
            </figure>
        </div>
        <nav>
            <ul class="nav nav-pills nav-stacked nav-flat metismenu" id="sidebar__navigation">
                <li><a href="#"><i class="fa fa-file fa-btn"></i>Pages</a></li>
                <li class="dropdown active">
                    <a href="#">
                        <i class="fa fa-lock fa-btn"></i>Access
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-pills nav-stacked nav-flat nav-shift collapse in">
                        <li class="active"><a href="#"><i class="fa fa-user fa-btn"></i>Users</a></li>
                        <li><a href="#"><i class="fa fa-users fa-btn"></i>Roles</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="sidebar__footer text-center">
            <small class="text-muted">
                Powered by <a href="http://getlittera.com">Littera</a> {{ $littera_version }}
            </small>
        </div>
    </aside>
    <main class="page">
        <header class="page__header container-fluid clearfix">
            <nav class="pull-left">
                <ul class="nav nav-pills">
                    <li><a href="{{ url('/') }}" target="_blank" title="Preview"><i class="fa fa-desktop fa-btn"></i>{{ url('/') }}</a></li>
                </ul>
            </nav>
            <nav class="pull-right">
                <ul class="nav nav-pills">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="https://www.gravatar.com/avatar/{{ md5($current_user->email) }}?d=identicon&s=25"
                                 alt="{{ $current_user->email }}" class="user-image" />
                            {{ $current_user->email }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="{{ url('littera/users/'.$current_user->id) }}">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    <li @if($section=='settings')class="active"@endif>
                        <a href="{{ route('littera.settings.getIndex') }}" title="Settings">
                            <i class="fa fa-cogs"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="page__content container-fluid">
            @yield('content')
        </div>
    </main>
</section>

{!! Html::script('js/vendor.js') !!}
{!! Html::script('js/littera.js') !!}
<script>
    $(function () {
        $('#sidebar__navigation').metisMenu();
    });
</script>
</body>
</html>
