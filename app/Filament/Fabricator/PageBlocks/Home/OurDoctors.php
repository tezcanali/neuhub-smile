<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class OurDoctors extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.our-doctors')
            ->schema([
                Tabs::make('Doktorlar Ayarları')
                    ->tabs([
                        Tab::make('Metin İçerikleri')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Başlık')
                                            ->required(),

                                        TextInput::make('mobileTitle')
                                            ->label('Mobil Başlık')
                                            ->required(),
                                    ]),
                                
                                Textarea::make('description')
                                    ->label('Açıklama')
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