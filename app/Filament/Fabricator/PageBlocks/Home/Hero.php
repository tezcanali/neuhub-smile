<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class Hero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.hero')
            ->schema([
                Tabs::make('Hero Ayarları')
                    ->tabs([
                        Tab::make('Metin İçerikleri')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Başlık')
                                            ->required(),

                                        TextInput::make('galleryText')
                                            ->label('Galeri Linki Metni')
                                            ->required(),
                                    ]),
                                
                                Textarea::make('description')
                                    ->label('Açıklama')
                                    ->required(),
                            ]),

                        Tab::make('Get a Quote')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('quoteTitle')
                                            ->label('Teklif Kutusu Başlık')
                                            ->required(),

                                        TextInput::make('quoteDescription')
                                            ->label('Teklif Kutusu Açıklama')
                                            ->required(),
                                    ]),
                            ]),

                        Tab::make('İmplant Kutusu')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('implantTitle')
                                            ->label('İmplant Kutusu Başlık')
                                            ->required(),

                                        TextInput::make('implantSubtitle')
                                            ->label('İmplant Kutusu Alt Başlık')
                                            ->required(),
                                    ]),
                            ]),

                        Tab::make('Görsel')
                            ->schema([
                                FileUpload::make('heroImage')
                                    ->label('Ana Görsel')
                                    ->image()
                                    ->maxSize(30000)
                                    ->disk('public')
                                    ->directory('home')
                                    ->optimize('webp')
                                    ->deletable(true)
                                    ->required(),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}