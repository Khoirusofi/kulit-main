<?php

namespace App\Filament\Resources\KetebalanRambutResource\Pages;

use App\Filament\Resources\KetebalanRambutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKetebalanRambuts extends ListRecords
{
    protected static string $resource = KetebalanRambutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
