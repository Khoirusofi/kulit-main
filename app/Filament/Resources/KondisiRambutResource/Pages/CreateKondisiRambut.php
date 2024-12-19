<?php

namespace App\Filament\Resources\KondisiRambutResource\Pages;

use App\Filament\Resources\KondisiRambutResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKondisiRambut extends CreateRecord
{
    protected static string $resource = KondisiRambutResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}
