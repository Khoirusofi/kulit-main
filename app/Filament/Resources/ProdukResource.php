<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Produk;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\KulitKepala;
use App\Models\ProsesKimia;
use App\Models\KondisiRambut;
use App\Models\TeksturRambut;
use App\Models\KetebalanRambut;
use Filament\Resources\Resource;
use App\Models\PenggunaanStyling;
use App\Models\HarapanKulitKepala;
use App\Models\KebiasaanPerawatan;
use Illuminate\Support\Collection;
use App\Models\HarapanBatangRambut;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProdukResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProdukResource\RelationManagers;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Produk';
    protected static ?string $navigationGroup = 'Produk';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        Section::make('1. Informasi Produk Produk')
            ->schema([
                FileUpload::make('foto')
                ->label('Foto')
                ->image()
                ->directory('produk_images')
                ->required(),

            TextInput::make('nama')
                ->label('Nama Produk')
                ->required()
                ->maxLength(255),

            Textarea::make('deskripsi')
                ->label('Deskripsi')
                ->required(),

            TextInput::make('harga')
                ->label('Harga')
                ->numeric()
                ->required(),

                Textarea::make('url')
                ->label('url')
                ->required(),
            ]),

            Section::make('2. Kategori Produk')
                ->schema([
                Select::make('category_id')
                        ->label('Kategori Produk')
                        ->relationship('category', 'nama')
                        ->required(),
                ]),

            Section::make('3. Informasi Kulit Kepala')
                ->schema([
                Select::make('kulit_kepalas_id')
                        ->label('Jenis Kulit Kepala')
                        ->relationship('kulitKepala', 'nama')
                        ->required()
                        ->columns(2),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('foto')
                ->label('Foto')
                ->circular(),

            TextColumn::make('nama')
                ->label('Nama')
                ->sortable()
                ->searchable(),

            TextColumn::make('deskripsi')
                ->label('Deskripsi')
                ->limit(30)
                ->tooltip(fn ($record) => $record->deskripsi),

            TextColumn::make('harga')
                ->label('Harga')
                ->sortable()
                ->money('IDR'),

            TextColumn::make('url')
                ->limit(20)
                ->label('Link Produk')
                ->tooltip(fn ($record) => $record->url),

            TextColumn::make('category.nama')
                ->label('Kategori Produk')
                ->searchable(),

            TextColumn::make('KulitKepala.nama')
                ->label('Jenis Kulit Kepala')
                ->searchable(),

        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->groupedBulkActions([
                BulkAction::make('delete')
                    ->requiresConfirmation()
                    ->action(function (Collection $records) {
                        foreach ($records as $record) {
                            if ($record->foto) {
                                Storage::disk('public')->delete('storage/' . $record->foto);
                            }
                            $record->delete();
                        }
                    }),
                BulkAction::make('forceDelete')
                    ->requiresConfirmation()
                    ->action(function (Collection $records) {
                        foreach ($records as $record) {
                            if ($record->foto) {
                                Storage::disk('public')->delete('storage/' . $record->foto);
                            }
                            $record->forceDelete();
                        }
                    }),
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
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
