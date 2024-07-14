<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class RelatedTreatments extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.related-treatments')
            ->schema([
                TextInput::make('title')->columnSpan([
                    'sm' => 2,
                    'xl' => 6,
                    '2xl' => 6,
                ])->label('Başlık')->required(),
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Treatment 1')
                            ->schema([
                                TextInput::make('title1')->columnSpan([
                                    'sm' => 2,
                                    'xl' => 6,
                                    '2xl' => 6,
                                ])->label('Başlık')->required(),
                                TextInput::make('url1')->columnSpan([
                                    'sm' => 2,
                                    'xl' => 6,
                                    '2xl' => 6,
                                ])->label('URL')->required(),
                                FileUpload::make('image1')
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
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Treatment 2')
                            ->schema([
                                TextInput::make('title2')->columnSpan([
                                    'sm' => 2,
                                    'xl' => 6,
                                    '2xl' => 6,
                                ])->label('Başlık')->required(),
                                TextInput::make('url2')->columnSpan([
                                    'sm' => 2,
                                    'xl' => 6,
                                    '2xl' => 6,
                                ])->label('URL')->required(),
                                FileUpload::make('image2')
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
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Treatment 3')
                            ->schema([
                                TextInput::make('title3')->columnSpan([
                                    'sm' => 2,
                                    'xl' => 6,
                                    '2xl' => 6,
                                ])->label('Başlık')->required(),
                                TextInput::make('url3')->columnSpan([
                                    'sm' => 2,
                                    'xl' => 6,
                                    '2xl' => 6,
                                ])->label('URL')->required(),
                                FileUpload::make('image3')
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
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                    ])
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6
                    ])
            ])->columns([
                'sm' => 2,
                'xl' => 6,
                '2xl' => 6,
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('16 Related Treatments');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
