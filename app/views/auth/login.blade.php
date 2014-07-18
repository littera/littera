@extends('layouts.auth')

@section('container')
<form class="form-login" role="form">
	<h2 class="form-login-heading text-center"><i class="fa fa-lock"></i> Littera</h2>
	<input type="email" class="form-control" placeholder="{{ trans('auth/views.input_login') }}" required autofocus>
	<input type="password" class="form-control" placeholder="{{ trans('auth/views.input_password') }}" required>
	<div class="checkbox">
		<label>
			<input type="checkbox" value="remember-me"> {{ trans('auth/views.input_remember_me') }}
		</label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">{{ trans('auth/views.button_login') }}</button>
</form>
@stop