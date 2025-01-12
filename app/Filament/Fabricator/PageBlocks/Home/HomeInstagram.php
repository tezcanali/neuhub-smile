<?php

namespace App\Filament\Fabricator\PageBlocks\Home;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class HomeInstagram extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home.home-instagram')
            ->schema([
                Tabs::make('Instagram Ayarları')
                    ->tabs([
                        Tab::make('Profil Bilgileri')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('username')
                                            ->label('Kullanıcı Adı')
                                            ->required(),

                                        TextInput::make('profileName')
                                            ->label('Profil Adı')
                                            ->required(),
                                    ]),
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('postCount')
                                            ->label('Gönderi Sayısı')
                                            ->required(),

                                        TextInput::make('followerCount')
                                            ->label('Takipçi Sayısı')
                                            ->required(),
                                    ]),
                            ]),

                        Tab::make('Görsel')
                            ->schema([
                                FileUpload::make('profileImage')
                                    ->label('Profil Görseli')
                                    ->image()
                                    ->maxSize(30000)
                                    ->disk('public')
                                    ->directory('instagram')
                                    ->optimize('webp')
                                    ->deletable(true)
                                    ->required(),
                            ]),

                        Tab::make('Bağlantı')
                            ->schema([
                                TextInput::make('instagramUrl')
                                    ->label('Instagram Profil Linki')
                                    ->url()
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
