<?php

namespace App\Filament\Resources\KebiasaanPerawatanResource\Pages;

use App\Filament\Resources\KebiasaanPerawatanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKebiasaanPerawatan extends CreateRecord
{
    protected static string $resource = KebiasaanPerawatanResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}
