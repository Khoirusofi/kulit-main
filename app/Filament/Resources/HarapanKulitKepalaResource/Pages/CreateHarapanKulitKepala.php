<?php

namespace App\Filament\Resources\HarapanKulitKepalaResource\Pages;

use App\Filament\Resources\HarapanKulitKepalaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHarapanKulitKepala extends CreateRecord
{
    protected static string $resource = HarapanKulitKepalaResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}
