@props(['data' => []])

@php
    $href = \Russelcruz28\PageBuilder\Support\SafeUrl::href($data['url'] ?? null);
@endphp

<a
    class="fpb-button"
    href="{{ $href }}"
    @editable('label')
>{!! \Russelcruz28\PageBuilder\PageBuilder::text($data['label'] ?? '') !!}</a>
