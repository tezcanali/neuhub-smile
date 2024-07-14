<?php

namespace App\Filament\Fabricator\PageBlocks\Global;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Galeri extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('global.galeri')
            ->schema([
                TextInput::make('title')->label('Başlık')->required(),
                Repeater::make('galleries')
                    ->columns([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ])
                    ->schema([
                        FileUpload::make('image')
                            ->label('Görsel')
                            ->image()
                            ->maxSize(30000)
                            ->disk('public')
                            ->directory('galleries')
                            ->required()
                            ->acceptedFileTypes([
                                'image/*'
                            ])
                            ->optimize('webp')
                            ->deletable(true)
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6,
                            ]),
                    ])
                    ->collapsed()
                    ->cloneable()
                    ->label('Galeri'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
