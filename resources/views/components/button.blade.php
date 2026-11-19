@props(['data' => []])

@php
    $href = \Russelcruz28\FilamentPageBuilder\Support\SafeUrl::href($data['url'] ?? null);
@endphp

<a
    class="fpb-button"
    href="{{ $href }}"
    @editable('label')
>{!! \Russelcruz28\FilamentPageBuilder\PageBuilder::text($data['label'] ?? '') !!}</a>
