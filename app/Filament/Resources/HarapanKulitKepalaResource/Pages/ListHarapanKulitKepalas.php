<?php

namespace App\Filament\Resources\HarapanKulitKepalaResource\Pages;

use App\Filament\Resources\HarapanKulitKepalaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHarapanKulitKepalas extends ListRecords
{
    protected static string $resource = HarapanKulitKepalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
