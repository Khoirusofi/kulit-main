<?php

namespace App\Filament\Resources\KetebalanRambutResource\Pages;

use App\Filament\Resources\KetebalanRambutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKetebalanRambut extends EditRecord
{
    protected static string $resource = KetebalanRambutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
