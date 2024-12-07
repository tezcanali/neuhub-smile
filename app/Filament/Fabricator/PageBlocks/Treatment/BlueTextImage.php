<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BlueTextImage extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.blue-text-image')
            ->schema([
                TextInput::make('title')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ])
                    ->required()
                    ->label('Başlık'),
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
                TextInput::make('alt_tag')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ])
                    ->label('Image Alt Tag'),
                RichEditor::make('content')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ])
                    ->required()
                    ->label('İçerik'),
            ])->columns([
                'sm' => 2,
                'xl' => 6,
                '2xl' => 6,
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('13 Blue Text Section');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
