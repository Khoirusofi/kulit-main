<?php

namespace App\Filament\Resources\TeksturRambutResource\Pages;

use App\Filament\Resources\TeksturRambutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeksturRambuts extends ListRecords
{
    protected static string $resource = TeksturRambutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
