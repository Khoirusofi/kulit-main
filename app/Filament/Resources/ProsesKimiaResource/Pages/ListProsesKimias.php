<?php

namespace App\Filament\Resources\ProsesKimiaResource\Pages;

use App\Filament\Resources\ProsesKimiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProsesKimias extends ListRecords
{
    protected static string $resource = ProsesKimiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
