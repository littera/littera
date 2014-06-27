<ul class="nav navbar-nav navbar-right">
	@if (Auth::check())
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<span class="glyphicon glyphicon-user"></span>
			Profile <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#">Settings</a></li>
			<li class="divider"></li>
			<li><a href="#">Change password</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
	</li>
	@else
	<li><a href="#login">Login</a></li>
	@endif
</ul>