<?php

namespace App\Filament\Resources\HarapanKulitKepalaResource\Pages;

use App\Filament\Resources\HarapanKulitKepalaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHarapanKulitKepala extends EditRecord
{
    protected static string $resource = HarapanKulitKepalaResource::class;

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
