@props(['data' => []])

@php
    use Russelcruz28\PageBuilder\Blocks\SpacerBlock;
    use Russelcruz28\PageBuilder\PageBuilder;

    $height = is_string($data['height'] ?? null) && array_key_exists($data['height'], SpacerBlock::PRESETS) ? $data['height'] : 'md';
    $pixels = SpacerBlock::pixels($data);
    $custom = is_numeric($data['size'] ?? null) && (int) $data['size'] > 0;
@endphp

<div
    class="fpb-spacer"
    data-fpb-height="{{ $height }}"
    @if ($custom) style="height: {{ $pixels }}px" @endif
    aria-hidden="true"
>@if (PageBuilder::isEditing())<span class="fpb-spacer-label">{{ __('page-builder::blocks.spacer.canvas_label') }} · {{ $pixels }}px</span>@endif</div>
