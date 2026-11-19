<?php

namespace Russelcruz28\PageBuilder\Blocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Russelcruz28\PageBuilder\Contracts\InlineEditable;
use Russelcruz28\PageBuilder\Contracts\PageBlock;
use Russelcruz28\PageBuilder\Editable;

/**
 * A quotation and who said it.
 */
class QuoteBlock implements InlineEditable, PageBlock
{
    /**
     * @return array<string, Editable>
     */
    public static function editables(): array
    {
        return [
            'text' => Editable::text()->multiline()->placeholder(__('page-builder::blocks.quote.placeholder')),
            'cite' => Editable::text()->placeholder(__('page-builder::blocks.quote.cite_placeholder')),
        ];
    }

    public static function type(): string
    {
        return 'quote';
    }

    public static function label(): string
    {
        return __('page-builder::blocks.quote.label');
    }

    public static function icon(): ?string
    {
        return 'heroicon-o-chat-bubble-bottom-center-text';
    }

    public static function category(): string
    {
        return 'content';
    }

    public static function description(): string
    {
        return __('page-builder::blocks.quote.description');
    }

    public static function view(): string
    {
        return 'page-builder::components.quote';
    }

    /**
     * @return array<int, string>
     */
    public static function fileFields(): array
    {
        return [];
    }

    public static function isVisible(): bool
    {
        return true;
    }

    /**
     * @return array<int, mixed>
     */
    public static function schema(): array
    {
        return [
            Textarea::make('text')->label(__('page-builder::blocks.quote.text'))->rows(4),
            TextInput::make('cite')->label(__('page-builder::blocks.quote.cite'))->maxLength(255),
        ];
    }
}
