<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\KulitKepala;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KulitKepalaResource\Pages;
use App\Filament\Resources\KulitKepalaResource\RelationManagers;

class KulitKepalaResource extends Resource
{
    protected static ?string $model = KulitKepala::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Kondisi Kulit Kelapa';
    protected static ?string $navigationGroup = 'Kulit Kepala';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Textarea::make('deskripsi')
                    ->label('Deskripsi Diagnosa')
                    ->required(),
                Textarea::make('kata')
                    ->label('Masukkan Tips dari Ahli')
                    ->required()
                    ->maxLength(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                ->label('Nama')
                ->sortable()
                ->searchable(),
                TextColumn::make('deskripsi')
                ->label('Deskripsi Diagnosa')
                ->limit(50)
                ->wrap(),
                TextColumn::make('kata')
                ->label('Tips dari Ahli')
                ->limit(50)
                ->wrap(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKulitKepalas::route('/'),
            'create' => Pages\CreateKulitKepala::route('/create'),
            'edit' => Pages\EditKulitKepala::route('/{record}/edit'),
        ];
    }
}
