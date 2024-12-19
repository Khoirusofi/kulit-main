<?php

namespace App\Filament\Resources\TeksturRambutResource\Pages;

use App\Filament\Resources\TeksturRambutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeksturRambut extends CreateRecord
{
    protected static string $resource = TeksturRambutResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}
