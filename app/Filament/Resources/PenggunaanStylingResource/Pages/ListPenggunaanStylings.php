<?php

namespace App\Filament\Resources\PenggunaanStylingResource\Pages;

use App\Filament\Resources\PenggunaanStylingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenggunaanStylings extends ListRecords
{
    protected static string $resource = PenggunaanStylingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
