@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">{{ trans('views.sr_close') }}</span>
        </button>
        {{ Session::get('success') }}
    </div>
@endif
@if(Session::has('fail'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">{{ trans('views.sr_close') }}</span>
        </button>
        {{ Session::get('fail') }}
    </div>
@endif
