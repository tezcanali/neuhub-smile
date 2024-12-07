<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Video extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.video')
            ->schema([
                TextInput::make('title')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ])
                    ->required()
                    ->label('Başlık'),
                Tabs::make('Videolar')
                    ->tabs([
                        Tabs\Tab::make('Video 1')
                            ->schema([
                                TextInput::make('url1')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->required()
                                    ->label('URL'),
                                FileUpload::make('cover1')
                                    ->label('Video Kapak')
                                    ->image()
                                    ->maxSize(50000)
                                    ->disk('public')
                                    ->directory('video')
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
                                TextInput::make('alt_tag')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->label('Image Alt Tag'),
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Video 2')
                            ->schema([
                                TextInput::make('url2')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->required()
                                    ->label('URL'),
                                FileUpload::make('cover2')
                                    ->label('Video Kapak')
                                    ->image()
                                    ->maxSize(50000)
                                    ->disk('public')
                                    ->directory('video')
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
                                TextInput::make('alt_tag2')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->label('Image Alt Tag'),
                            ])->columns([
                                'sm' => 2,
                                'xl' => 6,
                                '2xl' => 6
                            ]),
                        Tabs\Tab::make('Video 3')
                            ->schema([
                                TextInput::make('url3')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->required()
                                    ->label('URL'),
                                FileUpload::make('cover3')
                                    ->label('Video Kapak')
                                    ->image()
                                    ->maxSize(50000)
                                    ->disk('public')
                                    ->directory('video')
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
                                TextInput::make('alt_tag3')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 6,
                                    ])
                                    ->label('Image Alt Tag'),
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
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('12 Video');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
