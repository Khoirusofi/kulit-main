<?php

namespace App\Filament\Resources\HarapanBatangRambutResource\Pages;

use App\Filament\Resources\HarapanBatangRambutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHarapanBatangRambut extends EditRecord
{
    protected static string $resource = HarapanBatangRambutResource::class;

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
