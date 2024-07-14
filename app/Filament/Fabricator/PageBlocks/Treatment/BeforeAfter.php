<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BeforeAfter extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.before-after')
            ->schema([
                TextInput::make('title')->columnSpan([
                    'sm' => 2,
                    'xl' => 6,
                    '2xl' => 6,
                ])->label('Başlık'),
                TextInput::make('description')->columnSpan([
                    'sm' => 2,
                    'xl' => 6,
                    '2xl' => 6,
                ])->label('Slogan'),
                Repeater::make('galleries')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Görsel')
                            ->image()
                            ->maxSize(50000)
                            ->disk('public')
                            ->directory('before_after')
                            ->acceptedFileTypes([
                                'image/*'
                            ])
                            ->optimize('webp')
                            ->required()
                            ->deletable(true)
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6,
                            ]),
                    ])
                    ->collapsed()
                    ->cloneable()
                    ->label('Görseller')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ]),
            ])->columns([
                'sm' => 2,
                'xl' => 6,
                '2xl' => 6,
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('Before & After');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
