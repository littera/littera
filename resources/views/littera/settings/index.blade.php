@extends('littera.layouts.base')

@section('content')

<section class="panel panel-default panel-tabs">
    <header class="panel-heading"><h3 class="panel-title">Settings</h3></header>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
        </ul>
        <div class="tab-content">
            <p>Tab content</p>
        </div>
    </div>
</section>

@endsection