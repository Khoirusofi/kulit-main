<?php

namespace App\Filament\Resources\HarapanBatangRambutResource\Pages;

use App\Filament\Resources\HarapanBatangRambutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHarapanBatangRambuts extends ListRecords
{
    protected static string $resource = HarapanBatangRambutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
