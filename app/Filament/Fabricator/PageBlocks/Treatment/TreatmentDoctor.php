<?php

namespace App\Filament\Fabricator\PageBlocks\Treatment;

use App\Models\Doctor;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TreatmentDoctor extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('treatment.treatment-doctor')
            ->schema([
                Select::make('doctor')
                    ->label('Doctor')
                    ->options(function () {
                        return Doctor::all()->pluck('name', 'id')->toArray();
                    })
            ])->visible(fn ($get) => $get('../layout') == 'treatment-detail')->label('19 Doctor');
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
