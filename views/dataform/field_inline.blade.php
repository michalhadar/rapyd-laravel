@if ($field->type == 'hidden')

    {!! $field->output !!}

    @if ($field->message!='')
        <span class="help-block">
            <span class="fas fa-exclamation-triangle"></span>
            {!! $field->message !!}
        </span>
    @endif

@else
    <div class="form-group{!!$field->has_error!!}" id="fg_{!! $field->name !!}">

        <label for="{!! $field->name !!}" class="sr-only">{!! $field->label.$field->star !!}</label>
        <span id="div_{!! $field->name !!}">

            {!! $field->output !!}


            @if(count($field->messages))
            <span class="fas fa-times form-control-feedback"></span>
            @endif

        </span>

    </div>
@endif
