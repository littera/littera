@extends('layouts.site')

@section('container')

<div class="page-header">
    <h1>Internal Page</h1>
</div>

@if (Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span><span class="sr-only">{{ trans('views.sr_close') }}</span>
    </button>
    {{ Session::get('success') }}
</div>
@endif

<p class="lead">CMS based on Laravel Framework</p>

@stop