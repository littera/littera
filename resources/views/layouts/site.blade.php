<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>{{ $title }}</title>

    {!! Html::style('css/common.css') !!}
    {!! Html::style('css/app.css') !!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">My company</a>
        </div>
        <div class="collapse navbar-collapse">
            @include('partials.menu_left')
            @include('partials.menu_right')
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<!-- Begin page content -->
<div class="container">
    @yield('container')
</div>
<div class="footer">
    <div class="container">
        <p class="text-muted pull-left">
            &copy; 2015 My company

        <p class="text-muted pull-right">
            Powered by <a href="http://getlittera.com">Littera</a> {{ $littera_version }}
        </p>
    </div>
</div>

{!! Html::script('js/vendor.js') !!}
{!! Html::script('js/app.js') !!}
</body>
</html>
