<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Tables;
use App\Models\Diagnosa;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\DiagnosaResource\Pages;


class DiagnosaResource extends Resource
{
    protected static ?string $model = Diagnosa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Hasil Diagnosa';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama'),
                TextColumn::make('nomor_telepon')->label('Nomor Telepon'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('usia')->label('Usia'),
                TextColumn::make('produk.nama')
                ->label('Rekomendasi Produk')
                ->formatStateUsing(function ($state, $record) {
                    return $record->produk->pluck('nama')->join(', ');
                }),
                TextColumn::make('kulitKepala.nama')->label('Kulit Kepala'),
                TextColumn::make('prosesKimia.nama')->label('Proses Kimia'),
                TextColumn::make('teksturRambut.nama')->label('Tekstur Rambut'),
                TextColumn::make('kondisiRambut.nama')->label('Kondisi Rambut'),
                TextColumn::make('kebiasaanPerawatan.nama')->label('Kebiasaan Perawatan'),
                TextColumn::make('penggunaanStyling.nama')->label('Penggunaan Styling'),
                TextColumn::make('ketebalanRambut.nama')->label('Ketebalan Rambut'),
                TextColumn::make('harapanKulitKepala.nama')->label('Harapan Kulit Kepala'),
                TextColumn::make('harapanBatangRambut.nama')->label('Harapan Batang Rambut'),
                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->formatStateUsing(fn ($state) => Carbon::parse($state)->locale('id')->isoFormat('dddd, D MMMM YYYY HH:mm'))
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDiagnosas::route('/'),
        ];
    }

    public static function getLabel(): string
    {
        return 'Hasil Diagnosa';
    }

    // Penamaan untuk plural
    public static function getPluralLabel(): string
    {
        return 'Hasil Diagnosa';
    }
}
