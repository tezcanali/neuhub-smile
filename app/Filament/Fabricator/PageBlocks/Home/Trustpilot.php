<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\TextInput;

class Trustpilot extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.trustpilot')
            ->schema([
                TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->default('Review / Trustpilot / Winner'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}