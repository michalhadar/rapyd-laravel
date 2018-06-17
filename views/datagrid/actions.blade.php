

@if (in_array("show", $actions))
    <a class="" title="@lang('rapyd::rapyd.show')" href="{!! $uri !!}?show={!! $id !!}"><span class="fas fa-eye"> </span></a>
@endif
@if (in_array("modify", $actions))
    <a class="" title="@lang('rapyd::rapyd.modify')" href="{!! $uri !!}?modify={!! $id !!}"><span class="fas fa-edit"> </span></a>
@endif
@if (in_array("delete", $actions))
    <a class="text-danger" title="@lang('rapyd::rapyd.delete')" href="{!! $uri !!}?delete={!! $id !!}"><span class="fas fa-trash"> </span></a>
@endif
