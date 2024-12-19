<?php

namespace App\Filament\Resources\KebiasaanPerawatanResource\Pages;

use App\Filament\Resources\KebiasaanPerawatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKebiasaanPerawatan extends EditRecord
{
    protected static string $resource = KebiasaanPerawatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}
