<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HarapanKulitKepalaResource\Pages;
use App\Filament\Resources\HarapanKulitKepalaResource\RelationManagers;
use App\Models\HarapanKulitKepala;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HarapanKulitKepalaResource extends Resource
{
    protected static ?string $model = HarapanKulitKepala::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Harapan Kulit Kepala';
    protected static ?string $navigationGroup = 'Harapan';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                ->label('Nama')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('deskripsi')
                ->label('Deskripsi')
                ->required()
                ->maxLength(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama'),
                Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi'),
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
            'index' => Pages\ListHarapanKulitKepalas::route('/'),
            'create' => Pages\CreateHarapanKulitKepala::route('/create'),
            'edit' => Pages\EditHarapanKulitKepala::route('/{record}/edit'),
        ];
    }
}
