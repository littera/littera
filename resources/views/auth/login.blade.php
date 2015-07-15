@extends('layouts.auth')

@section('container')
    {!! Form::open([url('/auth/login'), 'class' => 'form-login', 'role' => 'form']) !!}
    <h1 class="form-login-heading text-center">{{ $title }}</h1>
    @include('partials.alert')
    @include('partials.errors')
    <div class="form-group">
        {!! Form::text('login', null, ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.login.input_login'), 'autofocus']) !!}
    </div>
    <div class="form-group">
        {!! Form::password('password', ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.login.input_password')]) !!}
    </div>
    <div class="checkbox col-xs-6">
        <label>
            <input type="checkbox" name="remember" value="true"> {{ trans('auth/views.login.input_remember_me') }}
        </label>
    </div>
    <div class="form-remind col-xs-6 text-right">
        <a href="{{ url('/password/email') }}">{{ trans('auth/views.login.a_password_email') }}</a>
    </div>
    <button class="btn btn-primary btn-lg btn-block btn-login" type="submit">{{ trans('auth/views.login.submit') }}</button>
    <p class="help-block text-center">
        {{ trans('auth/views.login.label_register') }}
    </p>
    <a href="{{ url('/auth/register') }}" class="btn btn-default btn-block btn-login">{{ trans('auth/views.login.a_register') }}</a>
    <p class="help-block text-center">
        <small>
            Powered by <a href="http://getlittera.com">Littera</a> {{ $littera_version }}
         </small>
    </p>
    {!! Form::close() !!}
@stop
