<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Stages extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.stages')
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
                        Tabs\Tab::make('Stage 1')
                            ->schema([
                                TextInput::make('title1')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ])
                                    ->required()
                                    ->label('Başlık')
                                    ->live(onBlur: true),
                                Select::make('color1')
                                    ->options([
                                        'text-success' => 'Yeşil',
                                        'text-pink' => 'Mor',
                                        'text-blue' => 'Mavi',
                                        'text-teal' => 'Turkuaz',
                                        'text-warning' => 'Turuncu',
                                    ])
                                    ->native(false)
                                    ->required()
                                    ->label('Renk')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),
                                TextInput::make('description1')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->required()
                                    ->label('Açıklama')
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Stage 2')
                            ->schema([
                                TextInput::make('title2')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ])
                                    ->label('Başlık')
                                    ->required()
                                    ->live(onBlur: true),
                                Select::make('color2')
                                    ->options([
                                        'text-success' => 'Yeşil',
                                        'text-pink' => 'Mor',
                                        'text-blue' => 'Mavi',
                                        'text-teal' => 'Turkuaz',
                                        'text-warning' => 'Turuncu',
                                    ])
                                    ->native(false)
                                    ->required()
                                    ->label('Renk')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),
                                TextInput::make('description2')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->required()
                                    ->label('Açıklama')
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Stage 3')
                            ->schema([
                                TextInput::make('title3')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ])
                                    ->label('Başlık')
                                    ->required()
                                    ->live(onBlur: true),
                                Select::make('color3')
                                    ->options([
                                        'text-success' => 'Yeşil',
                                        'text-pink' => 'Mor',
                                        'text-blue' => 'Mavi',
                                        'text-teal' => 'Turkuaz',
                                        'text-warning' => 'Turuncu',
                                    ])
                                    ->native(false)
                                    ->required()
                                    ->label('Renk')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),
                                TextInput::make('description3')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->required()
                                    ->label('Açıklama')
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Stage 4')
                            ->schema([
                                TextInput::make('title4')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ])
                                    ->label('Başlık')
                                    ->required()
                                    ->live(onBlur: true),
                                Select::make('color4')
                                    ->options([
                                        'text-success' => 'Yeşil',
                                        'text-pink' => 'Mor',
                                        'text-blue' => 'Mavi',
                                        'text-teal' => 'Turkuaz',
                                        'text-warning' => 'Turuncu',
                                    ])
                                    ->native(false)
                                    ->required()
                                    ->label('Renk')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),
                                TextInput::make('description4')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->required()
                                    ->label('Açıklama')
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Stage 5')
                            ->schema([
                                TextInput::make('title5')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ])
                                    ->label('Başlık')
                                    ->required()
                                    ->live(onBlur: true),
                                Select::make('color5')
                                    ->options([
                                        'text-success' => 'Yeşil',
                                        'text-pink' => 'Mor',
                                        'text-blue' => 'Mavi',
                                        'text-teal' => 'Turkuaz',
                                        'text-warning' => 'Turuncu',
                                    ])
                                    ->native(false)
                                    ->required()
                                    ->label('Renk')
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 3,
                                    ]),
                                TextInput::make('description5')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->required()
                                    ->label('Açıklama')
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
            ])->visible(fn($get) => $get('../layout') == 'treatment-detail')->label('Stages');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
