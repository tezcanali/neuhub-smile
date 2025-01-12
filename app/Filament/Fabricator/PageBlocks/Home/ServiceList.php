<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ServiceList extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.service-list')
            ->schema([
                Repeater::make('services')
                    ->schema([
                        TextInput::make('title')
                            ->label('Hizmet Başlığı')
                            ->required(),
                            
                        Textarea::make('icon')
                            ->label('SVG İkon Kodu')
                            ->required()
                            ->rows(4),
                    ])
                    ->defaultItems(6)
                    ->createItemButtonLabel('Hizmet Ekle')
                    ->collapsible()
                    ->reorderableWithButtons()
                    ->columnSpanFull(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}