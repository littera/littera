<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Littera</title>

	<!-- Bootstrap core CSS -->
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/font-awesome.min.css') }}

	<!-- Custom styles for this template -->
	{{ HTML::style('css/admin.css') }}

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
			<a class="navbar-brand" href="#">Littera <small>{{ Config::get('app.version') }}</small></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-dashboard"></span>
						Dashboard
					</a>
				</li>
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-cog"></span>
						Settings
					</a>
				</li>
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-user"></span>
						Profile
					</a>
				</li>
				<li>
					<a href="#">
						<span class="glyphicon glyphicon-question-sign"></span>
						Help
					</a>
				</li>
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
				<li><a href="#menu">Menu</a></li>
				<li><a href="#pages">Pages</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="#posts">Posts</a></li>
				<li><a href="#comments">Commnets</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="#templates">Templates</a></li>
				<li><a href="#settings">Settings</a></li>
			</ul>
			<div class="sidebar-footer">
				<p class="text-muted text-center">
					&copy; Littera 2014, CMS based on <a href="http://laravel.com/">Laravel framework</a>
					under <a href="http://opensource.org/licenses/MIT">MIT license</a>.
				</p>
			</div>
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header">Dashboard</h1>
			<p class="lead">CMS based on <a href="http://laravel.com/">Laravel framework</a></p>
			<h2 class="sub-header">Section title</h2>
			<p>bla-bla-bla...</p>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>
