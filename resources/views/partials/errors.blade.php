@if($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">{{ trans('views.sr_close') }}</span>
        </button>
        <ul class="list-unstyled">
            {!! implode($errors->all('<li>:message</li>')) !!}
        </ul>
    </div>
@endif
