<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Stages extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.stages')
            ->schema([
                //
            ])->columns([
                'sm' => 2,
                'xl' => 6,
                '2xl' => 6,
            ])->visible(fn($get) => $get('../layout') == 'treatment-detail')->label('5 Stages');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
