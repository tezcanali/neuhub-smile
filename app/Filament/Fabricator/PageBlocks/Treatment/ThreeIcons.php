<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ThreeIcons extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.three-icons')
            ->schema([
                TextInput::make('title')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ])
                    ->required()
                    ->label('Başlık'),
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Icon 1')
                            ->schema([
                                TextInput::make('title1')
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
                                    ->label('SVG Kod')
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Icon 2')
                            ->schema([
                                TextInput::make('title2')
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
                                    ->label('SVG Kod')
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Icon 3')
                            ->schema([
                                TextInput::make('title3')
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
                                    ->label('SVG Kod')
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
            ])->visible(fn($get) => $get('../layout') == 'treatment-detail')->label("15 3'lü Icon");
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
