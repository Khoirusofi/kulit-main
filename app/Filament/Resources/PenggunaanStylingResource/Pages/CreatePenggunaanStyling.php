<?php

namespace App\Filament\Resources\PenggunaanStylingResource\Pages;

use App\Filament\Resources\PenggunaanStylingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePenggunaanStyling extends CreateRecord
{
    protected static string $resource = PenggunaanStylingResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}
