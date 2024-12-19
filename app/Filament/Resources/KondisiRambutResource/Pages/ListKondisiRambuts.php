<?php

namespace App\Filament\Resources\KondisiRambutResource\Pages;

use App\Filament\Resources\KondisiRambutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKondisiRambuts extends ListRecords
{
    protected static string $resource = KondisiRambutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
