<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Select;

class News extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.news')
            ->schema([
                Select::make('sort_order')
                    ->label('Blog Sıralama')
                    ->options([
                        'desc' => 'Yeniden Eskiye',
                        'asc' => 'Eskiden Yeniye'
                    ])
                    ->default('desc')
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        // Blog verilerini seçilen sıralamaya göre al
        $blogs = \App\Models\Blog::where('status', 1)
            ->orderBy('created_at', $data['sort_order'])
            ->limit(4)
            ->get();

        return array_merge($data, ['blogs' => $blogs]);
    }
}