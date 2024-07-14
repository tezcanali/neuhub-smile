<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Prices extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.prices')
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('İçerik')
                            ->schema([
                                TextInput::make('title')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->required()
                                    ->label('Başlık'),
                                Fieldset::make('İkon 1')
                                    ->schema([
                                        TextInput::make('subtitle1')
                                            ->columnSpan([
                                                'sm' => 2,
                                                'xl' => 6,
                                                '2xl' => 6,
                                            ])
                                            ->required()
                                            ->label('Başlık'),
                                        Textarea::make('svg1')
                                            ->columnSpan([
                                                'sm' => 2,
                                                'xl' => 6,
                                                '2xl' => 6,
                                            ])
                                            ->required()
                                            ->label('SVG')
                                    ]),
                                Fieldset::make('İkon 2')
                                    ->schema([
                                        TextInput::make('subtitle2')
                                            ->columnSpan([
                                                'sm' => 2,
                                                'xl' => 6,
                                                '2xl' => 6,
                                            ])
                                            ->required()
                                            ->label('Başlık'),
                                        Textarea::make('svg2')
                                            ->columnSpan([
                                                'sm' => 2,
                                                'xl' => 6,
                                                '2xl' => 6,
                                            ])
                                            ->required()
                                            ->label('SVG')
                                    ]),
                                Fieldset::make('İkon 3')
                                    ->schema([
                                        TextInput::make('subtitle3')
                                            ->columnSpan([
                                                'sm' => 2,
                                                'xl' => 6,
                                                '2xl' => 6,
                                            ])
                                            ->required()
                                            ->label('Başlık'),
                                        Textarea::make('svg3')
                                            ->columnSpan([
                                                'sm' => 2,
                                                'xl' => 6,
                                                '2xl' => 6,
                                            ])
                                            ->required()
                                            ->label('SVG')
                                    ]),

                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Tablo')
                            ->schema([
                                Repeater::make('tables')
                                    ->columns([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->schema([
                                        TextInput::make('title')
                                            ->columnSpan([
                                                'sm' => 2,
                                                'xl' => 6,
                                                '2xl' => 6,
                                            ])
                                            ->required()
                                            ->label('Treatments')
                                            ->live(onBlur: true),
                                        TextInput::make('trPrice')
                                            ->columnSpan([
                                                'sm' => 1,
                                                'xl' => 3,
                                                '2xl' => 3,
                                            ])
                                            ->required()
                                            ->label('TR Fiyat'),
                                        TextInput::make('usPrice')
                                            ->columnSpan([
                                                'sm' => 1,
                                                'xl' => 3,
                                                '2xl' => 3,
                                            ])
                                            ->required()
                                            ->label('US Fiyat'),
                                        TextInput::make('ukPrice')
                                            ->columnSpan([
                                                'sm' => 1,
                                                'xl' => 3,
                                                '2xl' => 3,
                                            ])
                                            ->required()
                                            ->label('UK Fiyat'),
                                        TextInput::make('saving')
                                            ->columnSpan([
                                                'sm' => 1,
                                                'xl' => 3,
                                                '2xl' => 3,
                                            ])
                                            ->required()
                                            ->label('Saving'),
                                    ])
                                    ->collapsed()
                                    ->cloneable()
                                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                                    ->label('Fiyatlar')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6
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
            ])->visible(fn($get) => $get('../layout') == 'treatment-detail')->label('9 Fiyatlar');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
