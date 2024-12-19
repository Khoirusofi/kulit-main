<?php

namespace App\Filament\Resources\KetebalanRambutResource\Pages;

use App\Filament\Resources\KetebalanRambutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKetebalanRambut extends CreateRecord
{
    protected static string $resource = KetebalanRambutResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}
