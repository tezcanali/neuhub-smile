<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class OurDoctors extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.our-doctors')
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
                Repeater::make('doctors')
                    ->schema([
                        TextInput::make('name')->columnSpan([
                            'sm' => 1,
                            'xl' => 3,
                            '2xl' => 3,
                        ])->label('İsim'),
                        TextInput::make('job')->columnSpan([
                            'sm' => 1,
                            'xl' => 3,
                            '2xl' => 3,
                        ])->label('Bölüm'),
                        TextInput::make('url')->columnSpan([
                            'sm' => 2,
                            'xl' => 6,
                            '2xl' => 6,
                        ])->label('URL'),
                        FileUpload::make('image')
                            ->label('Görsel')
                            ->image()
                            ->maxSize(50000)
                            ->disk('public')
                            ->directory('doctors')
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
                    ])
                    ->collapsed()
                    ->cloneable()
                    ->label('Doktorlar')
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 6,
                        '2xl' => 6,
                    ]),
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('11 Our Doctors');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
