<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">

	<title>Home - Littera</title>

	<!-- Bootstrap core CSS -->
	{{ HTML::style('css/bootstrap.min.css') }}

	<!-- Font Awesome CSS -->
	{{ HTML::style('css/font-awesome.min.css') }}

	<!-- Custom styles for this template -->
	{{ HTML::style('css/common.css') }}

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	{{ HTML::script('js/ie10-viewport-bug-workaround.js') }}

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
			<a class="navbar-brand" href="#">My company</a>
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
			&copy; My company 2014
		<p class="text-muted pull-right">
			Powered by <a href="#">Littera</a>
		</p>
	</div>
</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>