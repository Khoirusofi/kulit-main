<?php

namespace App\Filament\Resources\PenggunaanStylingResource\Pages;

use App\Filament\Resources\PenggunaanStylingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggunaanStyling extends EditRecord
{
    protected static string $resource = PenggunaanStylingResource::class;

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
