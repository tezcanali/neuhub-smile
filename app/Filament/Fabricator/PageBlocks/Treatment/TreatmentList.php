<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TreatmentList extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.treatment-list')
            ->schema([
                Repeater::make('treatments')
                    ->schema([
                        TextInput::make('title')->columnSpan([
                            'sm' => 2,
                            'xl' => 3,
                            '2xl' => 3,
                        ])->label('Başlık')->required(),
                        TextInput::make('url')->columnSpan([
                            'sm' => 2,
                            'xl' =>3,
                            '2xl' => 3,
                        ])->label('URL')->required(),
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
                    ])->columns([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ])])->visible(fn($get) => $get('../layout') == 'treatments')->label('Treatment List');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
