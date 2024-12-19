<?php

namespace App\Filament\Widgets;

use App\Models\Diagnosa;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class DiagnosaWidget extends BaseWidget
{
    protected static ?string $heading = 'Hasil Diagnosa Terbaru';

    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Diagnosa::query()
            ->with(['produk', 'kulitKepala'])
            ->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama')
                ->label('Nama Pasien')
                ->sortable(),

            Tables\Columns\TextColumn::make('kulitKepala.nama')
                ->label('Diagnosa')
                ->sortable(),

            Tables\Columns\TextColumn::make('produk.nama')
                ->label('Rekomendasi Produk')
                ->formatStateUsing(function ($state, $record) {
                    return $record->produk->pluck('nama')->join(', ');
                }),

            Tables\Columns\TextColumn::make('created_at')
            ->label('Dibuat Pada')
            ->formatStateUsing(fn ($state) => Carbon::parse($state)->locale('id')->isoFormat('dddd, D MMMM YYYY HH:mm'))
        ];
    }
}
