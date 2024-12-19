<?php

namespace App\Filament\Resources\ProsesKimiaResource\Pages;

use App\Filament\Resources\ProsesKimiaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProsesKimia extends CreateRecord
{
    protected static string $resource = ProsesKimiaResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}
