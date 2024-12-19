<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KebiasaanPerawatanResource\Pages;
use App\Filament\Resources\KebiasaanPerawatanResource\RelationManagers;
use App\Models\KebiasaanPerawatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KebiasaanPerawatanResource extends Resource
{
    protected static ?string $model = KebiasaanPerawatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Kebiasaan Perawatan';
    protected static ?string $navigationGroup = 'Batang Rambut';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Kebiasaan')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi Kebiasaan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Kebiasaan')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50), // Batasi tampilan deskripsi
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
            'index' => Pages\ListKebiasaanPerawatans::route('/'),
            'create' => Pages\CreateKebiasaanPerawatan::route('/create'),
            'edit' => Pages\EditKebiasaanPerawatan::route('/{record}/edit'),
        ];
    }
}
