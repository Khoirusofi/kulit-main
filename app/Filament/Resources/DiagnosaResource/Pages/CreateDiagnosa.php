<?php

namespace App\Filament\Resources\DiagnosaResource\Pages;

use App\Filament\Resources\DiagnosaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDiagnosa extends CreateRecord
{
    protected static string $resource = DiagnosaResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman index setelah input data
        return $this->getResource()::getUrl('index');
    }
}

