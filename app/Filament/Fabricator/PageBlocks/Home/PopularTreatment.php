<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;

class PopularTreatment extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.popular-treatment')
            ->schema([
                Tabs::make('Popüler Tedavi Ayarları')
                    ->tabs([
                        Tab::make('Metin İçerikleri')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Başlık')
                                            ->required(),

                                        TextInput::make('subtitle')
                                            ->label('Alt Başlık')
                                            ->required(),
                                    ]),
                            ]),

                        Tab::make('Tedaviler')
                            ->schema([
                                Repeater::make('treatments')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Tedavi Başlığı')
                                            ->required(),

                                        Textarea::make('description')
                                            ->label('Tedavi Açıklaması')
                                            ->required(),

                                        FileUpload::make('image')
                                            ->label('Tedavi Görseli')
                                            ->image()
                                            ->maxSize(30000)
                                            ->disk('public')
                                            ->directory('treatments')
                                            ->optimize('webp')
                                            ->deletable(true)
                                            ->required(),

                                        TextInput::make('link')
                                            ->label('Tedavi Linki')
                                            ->required(),
                                    ])
                                    ->defaultItems(1)
                                    ->createItemButtonLabel('Tedavi Ekle')
                                    ->collapsible()
                                    ->cloneable()
                                    ->reorderableWithButtons()
                                    ->columnSpanFull(),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
