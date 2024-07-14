<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Overview extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.overview')
            ->schema([
                TextInput::make('title')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ])
                    ->required()
                    ->label('Başlık'),
                Repeater::make('tables')
                    ->schema([
                        TextInput::make('leftTitle')
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 3,
                                '2xl' => 3,
                            ])
                            ->required()
                            ->label('Sol Başlık'),
                        TextInput::make('rightTitle')
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 3,
                                '2xl' => 3,
                            ])
                            ->required()
                            ->label('Sağ Başlık'),
                    ])
                    ->collapsed()
                    ->cloneable()
                    ->label('Tablo')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ]),
            ])->columns([
                'sm' => 2,
                'xl' => 6,
                '2xl' => 6,
            ])->visible(fn($get) => $get('../layout') == 'treatment-detail')->label('Overview');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
