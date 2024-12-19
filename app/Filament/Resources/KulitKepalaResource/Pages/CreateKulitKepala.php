<?php

namespace App\Filament\Resources\KulitKepalaResource\Pages;

use App\Filament\Resources\KulitKepalaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKulitKepala extends CreateRecord
{
    protected static string $resource = KulitKepalaResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}
