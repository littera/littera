@extends('layouts.auth')

@section('container')
    <h1 class="sr-only">Littera</h1>
    {!! Form::open([url('/auth/register'), 'class' => 'form-login', 'role' => 'form']) !!}
    <h2 class="form-login-heading text-center">{{ $title }}</h2>
    @include('partials.alert')
    @include('partials.errors')
    <div class="form-group">
        {!! Form::text('login', null, ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.register.input_login'), 'autofocus']) !!}
    </div>
    <div class="form-group">
        {!! Form::email('email', null, ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.register.input_email')]) !!}
    </div>
    <div class="form-group">
        {!! Form::password('password', ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.register.input_password')]) !!}
    </div>
    <div class="form-group">
        {!! Form::password('password_confirmation', ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.register.input_password_confirmation')]) !!}
    </div>
    {{--<div class="checkbox">--}}
        {{--<label>--}}
            {{--<input type="checkbox" name="agree" value="true"> {{ trans('auth/views.register.input_agree') }}--}}
        {{--</label>--}}
    {{--</div>--}}
    <button class="btn btn-primary btn-lg btn-block btn-login" type="submit">{{ trans('auth/views.register.submit') }}</button>
    <p class="help-block text-center">
        {{ trans('auth/views.register.label_login') }}
    </p>
    <a href="{{ url('/auth/login') }}" class="btn btn-default btn-block btn-login">{{ trans('auth/views.register.a_login') }}</a>
    <p class="help-block text-center">
        <small>
            Powered by <a href="http://getlittera.com">Littera</a> {{ $littera_version }}
        </small>
    </p>
    {!! Form::close() !!}
@stop
