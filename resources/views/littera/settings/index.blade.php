@extends('littera.layouts.base')

@section('content')

<section class="panel panel-default panel-tabs">
    <header class="panel-heading clearfix">
        <h2 class="panel-title pull-left">Settings</h2>
        <nav class="pull-right">
            <div class="btn-group">
                <a class="btn btn-primary" href="#" title="Save">
                    <i class="fa fa-save"></i>
                </a>
            </div>
        </nav>
    </header>
    <div class="panel-body">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active">
                <a href="#">General</a>
            </li>
            <li role="presentation">
                <a href="#"><i class="fa fa-lock fa-btn"></i>Access</a>
            </li>
            <li role="presentation">
                <a href="#"><i class="fa fa-file fa-btn"></i>Pages</a>
            </li>
        </ul>
        <div class="tab-content">
            {!! Form::open(['route' => 'littera.settings.postGeneral', 'class' => 'form-horizontal', 'role' => 'form']) !!}
            <h3 class="page-header">Application</h3>
            <fieldset>
                <div class="form-group">
                    <label for="title" class="col-lg-3 control-label">Title</label>
                    <div class="col-lg-9">
                        {!! Form::text('title', config('littera.title'), ['id' => 'title', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="tagline" class="col-lg-3 control-label">Tagline</label>
                    <div class="col-lg-9">
                        {!! Form::text('tagline', config('littera.tagline'), ['id' => 'tagline', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="copyright" class="col-lg-3 control-label">Copyright</label>
                    <div class="col-lg-9">
                        {!! Form::text('copyright', config('littera.copyright'), ['id' => 'copyright', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </fieldset>
            <h3 class="page-header">Email Settings</h3>
            <fieldset>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">Driver</label>
                    <div class="col-lg-9">
                        {!! Form::select('driver', $settings['email']['drivers'], config('mail.driver'), ['id' => 'title', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
</section>

@endsection