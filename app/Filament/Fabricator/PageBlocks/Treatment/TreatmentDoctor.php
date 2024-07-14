<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TreatmentDoctor extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.treatment-doctor')
            ->schema([
                //
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('19 Doctor');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
