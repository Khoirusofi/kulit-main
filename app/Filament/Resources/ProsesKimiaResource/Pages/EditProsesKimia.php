<?php

namespace App\Filament\Resources\ProsesKimiaResource\Pages;

use App\Filament\Resources\ProsesKimiaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProsesKimia extends EditRecord
{
    protected static string $resource = ProsesKimiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
