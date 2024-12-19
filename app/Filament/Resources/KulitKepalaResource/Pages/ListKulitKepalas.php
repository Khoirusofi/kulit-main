<?php

namespace App\Filament\Resources\KulitKepalaResource\Pages;

use App\Filament\Resources\KulitKepalaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKulitKepalas extends ListRecords
{
    protected static string $resource = KulitKepalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
