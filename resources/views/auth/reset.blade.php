@extends('layouts.auth')

@section('container')
    {!! Form::open([url('/password/reset/'.$token), 'class' => 'form-login', 'role' => 'form']) !!}
    <h1 class="form-login-heading text-center">{{ $title }}</h1>
    @include('partials.alert')
    @include('partials.errors')
    {!! Form::hidden('token', $token) !!}
    <div class="form-group">
        {!! Form::email('email', null, ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.reset.input_email')]) !!}
    </div>
    <div class="form-group">
        {!! Form::password('password', ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.reset.input_password')]) !!}
    </div>
    <div class="form-group">
        {!! Form::password('password_confirmation', ['class' => 'form-control input-lg', 'placeholder' => trans('auth/views.reset.input_password_confirmation')]) !!}
    </div>
    <button class="btn btn-primary btn-lg btn-block btn-login" type="submit">{{ trans('auth/views.reset.submit') }}</button>
    <p class="help-block text-center">
        <small>
            Powered by <a href="http://getlittera.com">Littera</a> {{ $littera_version }}
        </small>
    </p>
    {!! Form::close() !!}
@stop
