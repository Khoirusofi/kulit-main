<?php

namespace App\Filament\Resources\KebiasaanPerawatanResource\Pages;

use App\Filament\Resources\KebiasaanPerawatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKebiasaanPerawatans extends ListRecords
{
    protected static string $resource = KebiasaanPerawatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
