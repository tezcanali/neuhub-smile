<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Text extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.text')
            ->schema([
                TextInput::make('title')->columnSpan([
                    'sm' => 2,
                    'xl' => 6,
                    '2xl' => 6,
                ])->label('Başlık'),
                RichEditor::make('content')->columnSpan([
                    'sm' => 2,
                    'xl' => 6,
                    '2xl' => 6,
                ])->label('İçerik'),
            ])->columns([
                'sm' => 2,
                'xl' => 6,
                '2xl' => 6,
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('4 Metin');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
