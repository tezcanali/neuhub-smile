<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Faq extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.faq')
            ->schema([
                TextInput::make('subtitle')->columnSpan([
                    'sm' => 2,
                    'xl' => 6,
                    '2xl' => 6,
                ])->label('Üst Başlık'),
                TextInput::make('title')->columnSpan([
                    'sm' => 2,
                    'xl' => 6,
                    '2xl' => 6,
                ])->label('Başlık'),
                Textarea::make('description')->columnSpan([
                    'sm' => 2,
                    'xl' => 6,
                    '2xl' => 6,
                ])->label('Açıklama'),
                Repeater::make('faqs')
                    ->schema([
                        TextInput::make('title')->columnSpan([
                            'sm' => 2,
                            'xl' => 6,
                            '2xl' => 6,
                        ])->label('Başlık'),
                        Textarea::make('description')->columnSpan([
                            'sm' => 2,
                            'xl' => 6,
                            '2xl' => 6,
                        ])->label('Açıklama'),
                    ])
                    ->collapsed()
                    ->cloneable()
                    ->label('FAQ')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
