<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ProsCons extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.pros-cons')
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
                        Tabs\Tab::make('Pros')
                            ->schema([
                                TextInput::make('prosTitle')->columnSpan([
                                    'sm' => 2,
                                    'xl' => 6,
                                    '2xl' => 6,
                                ])->label('Başlık')->required(),
                                Repeater::make('pros')
                                    ->schema([
                                        TextInput::make('title')->columnSpan([
                                            'sm' => 2,
                                            'xl' => 6,
                                            '2xl' => 6,
                                        ])->label('Başlık')->required(),
                                        Textarea::make('description')->columnSpan([
                                            'sm' => 2,
                                            'xl' => 6,
                                            '2xl' => 6,
                                        ])->label('Açıklama')->required(),
                                    ])
                                    ->collapsed()
                                    ->cloneable()
                                    ->label('Pros')
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
                        Tabs\Tab::make('Cons')
                            ->schema([
                                TextInput::make('consTitle')->columnSpan([
                                    'sm' => 2,
                                    'xl' => 6,
                                    '2xl' => 6,
                                ])->label('Başlık')->required(),
                                Repeater::make('cons')
                                    ->schema([
                                        TextInput::make('title')->columnSpan([
                                            'sm' => 2,
                                            'xl' => 6,
                                            '2xl' => 6,
                                        ])->label('Başlık')->required(),
                                        Textarea::make('description')->columnSpan([
                                            'sm' => 2,
                                            'xl' => 6,
                                            '2xl' => 6,
                                        ])->label('Açıklama')->required(),
                                    ])
                                    ->collapsed()
                                    ->cloneable()
                                    ->label('Cons')
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
            ])->visible(fn($get) => $get('../layout') == 'treatment-detail')->label('14 Pros & Cons');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
