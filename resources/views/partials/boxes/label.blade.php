<div class="">
    <h6>{{ $title or trans('Tags')}}</h6>
    @include('partials.forms.label', ['type' => $type, 'id' => $id])

    <ul class="tag-list list-inline" style="padding: 0">
        @each('partials.lists.labels', $list, 'list')
    </ul>

    <div class="clearfix"></div>
</div>
