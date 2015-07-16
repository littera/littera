@extends('layouts.auth')

@section('container')
    <h1 class="sr-only">Littera</h1>
    {!! Form::open([url('/password/email'), 'class' => 'form-login', 'role' => 'form']) !!}
    <h2 class="form-login-heading text-center">{{ $title }}</h2>
    @include('partials.alert')
    @include('partials.errors')
    <div class="form-group">
        {!! Form::email('email', null, ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.password.input_email')]) !!}
    </div>
    <button class="btn btn-primary btn-lg btn-block btn-login" type="submit">{{ trans('auth/views.password.submit') }}</button>
    <p class="help-block text-center">
        {{ trans('auth/views.password.label_login') }}
    </p>
    <a href="{{ url('/auth/login') }}" class="btn btn-default btn-block btn-login">{{ trans('auth/views.password.a_login') }}</a>
    <p class="help-block text-center">
        <small>
            Powered by <a href="http://getlittera.com">Littera</a> {{ $littera_version }}
        </small>
    </p>
    {!! Form::close() !!}
@stop
