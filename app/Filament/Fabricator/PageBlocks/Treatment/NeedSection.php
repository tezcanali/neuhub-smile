<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class NeedSection extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.need-section')
            ->schema([
                FileUpload::make('image')
                    ->label('Görsel')
                    ->image()
                    ->maxSize(30000)
                    ->disk('public')
                    ->directory('treatment')
                    ->optimize('webp')
                    ->deletable(true)
                    ->required()
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ]),
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
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('17 Need Section');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
