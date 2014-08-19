<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>{{ $title }} &middot; Littera</title>

	<!-- Bootstrap core CSS -->
	{{ HTML::style('css/bootstrap.min.css') }}

	<!-- Font Awesome CSS -->
	{{ HTML::style('css/font-awesome.min.css') }}

	<!-- Custom styles for this template -->
	{{ HTML::style('css/auth.css') }}

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	{{ HTML::script('js/ie10-viewport-bug-workaround.js') }}

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<div class="container">
	@yield('container')
</div> <!-- /container -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>