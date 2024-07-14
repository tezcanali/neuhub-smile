<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TrustPilot extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.trust-pilot')
            ->schema([
                //
            ])->columns([
                'sm' => 2,
                'xl' => 6,
                '2xl' => 6,
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('6 Trust Pilot');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
