<ul class="nav navbar-nav navbar-right">
    @if(Auth::check())
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span>
                {{ $current_user->login }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('littera.dashboard.getIndex') }}">Administrator</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
        </li>
    @else
        <li><a href="{{ url('/auth/login') }}">Login</a></li>
    @endif
</ul>
