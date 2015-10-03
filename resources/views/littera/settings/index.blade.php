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
            <li role="presentation" class="disabled">
                <a href="#"><i class="fa fa-lock fa-btn"></i>Access</a>
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
                        {!! Form::select('mail_driver', $settings['email']['drivers'], config('mail.driver'), ['id' => 'mail_driver', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">Host</label>
                    <div class="col-lg-9">
                        {!! Form::text('mail_host', config('mail.host'), ['id' => 'mail_host', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">Port</label>
                    <div class="col-lg-9">
                        {!! Form::text('mail_port', config('mail.port'), ['id' => 'mail_port', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">From address</label>
                    <div class="col-lg-9">
                        {!! Form::text('mail_from_address', config('mail.from.address'), ['id' => 'mail_from_address', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">From name</label>
                    <div class="col-lg-9">
                        {!! Form::text('mail_from_name', config('mail.from.name'), ['id' => 'mail_from_name', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">Encryption Protocol</label>
                    <div class="col-lg-9">
                        {!! Form::select('mail_encryption', $settings['email']['encryption'], config('mail.encryption'), ['id' => 'mail_encryption', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">Server Username</label>
                    <div class="col-lg-9">
                        {!! Form::text('mail_username', config('mail.username'), ['id' => 'mail_username', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">Server Password</label>
                    <div class="col-lg-9">
                        {!! Form::text('mail_password', config('mail.password'), ['id' => 'mail_password', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">Sendmail Path</label>
                    <div class="col-lg-9">
                        {!! Form::text('mail_sendmail', config('mail.sendmail'), ['id' => 'mail_sendmail', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="driver" class="col-lg-3 control-label">Mail "pretend"</label>
                    <div class="col-lg-9">
                        {!! Form::select('mail_pretend', $settings['email']['pretend'], (int) config('mail.pretend'), ['id' => 'mail_pretend', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
</section>

@endsection