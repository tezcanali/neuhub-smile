<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TextImageLeft extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.text-image-left')
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
                    'xl' => 4,
                    '2xl' => 4,
                ])->label('Başlık'),
                Select::make('tag')
                    ->options([
                        'h1' => 'H1',
                        'h2' => 'H2',
                        'h3' => 'H3',
                        'h4' => 'H4',
                        'h5' => 'H5',
                    ])
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ])
                    ->label('H Tag')
                    ->native(false),
                RichEditor::make('content')->columnSpan([
                    'sm' => 2,
                    'xl' => 6,
                    '2xl' => 6,
                ])->label('İçerik'),
            ])->columns([
                'sm' => 2,
                'xl' => 6,
                '2xl' => 6,
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('2 / 7 Sol Metin & Sağ Görsel');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
