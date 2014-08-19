@extends('layouts.auth')

@section('container')
{{ Form::open(['route' => 'auth.postLogin', 'class' => 'form-login', 'role' => 'form']) }}
	<h1 class="form-login-heading text-center"><i class="fa fa-lock"></i> Littera</h1>
	@if (Session::has('danger'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert">
			<span aria-hidden="true">&times;</span><span class="sr-only">{{ trans('views.sr_close') }}</span>
		</button>
		{{ Session::get('danger') }}
	</div>
	@endif
	@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert">
			<span aria-hidden="true">&times;</span><span class="sr-only">{{ trans('views.sr_close') }}</span>
		</button>
		<ul class="list-unstyled">
			{{ implode($errors->all('<li>:message</li>')) }}
		</ul>
	</div>
	@endif
	{{ Form::text('login', null, ['class' => 'form-control', 'placeholder' => trans('auth/views.input_login'), 'require', 'autofocus']) }}
	{{ Form::password('password', ['class' => 'form-control', 'placeholder' => trans('auth/views.input_password'), 'require']) }}
	<div class="checkbox col-xs-6">
		<label>
			<input type="checkbox" name="remember_me" value="true"> {{ trans('auth/views.input_remember_me') }}
		</label>
	</div>
	<div class="form-remind col-xs-6 text-right">
		<a href="{{ route('auth.getReminder') }}">{{ trans('auth/views.a_remind') }}</a>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">{{ trans('auth/views.button_login') }}</button>
	<p class="help-block text-center">
		<small>
			<a href="http://getlittera.com">Littera</a> made with <span class="text-danger">♥</span> by <a href="http://pektop.net">PEKTOP</a>
		</small>
	</p>
{{ Form::close() }}
@stop