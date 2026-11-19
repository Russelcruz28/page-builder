@props(['data' => []])

@php
    use Russelcruz28\FilamentPageBuilder\Blocks\HeadingBlock;
    use Russelcruz28\FilamentPageBuilder\PageBuilder;

    $level = HeadingBlock::levelFor($data['level'] ?? null);
    $text = is_string($data['text'] ?? null) ? $data['text'] : '';
@endphp

@if (PageBuilder::shows('text', $text))
    <{{ $level }} class="fpb-heading" data-fpb-level="{{ $level }}" @editable('text')>{!! PageBuilder::text($text) !!}</{{ $level }}>
@endif
