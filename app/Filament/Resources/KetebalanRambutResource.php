<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\KetebalanRambut;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KetebalanRambutResource\Pages;
use App\Filament\Resources\KetebalanRambutResource\RelationManagers;

class KetebalanRambutResource extends Resource
{
    protected static ?string $model = KetebalanRambut::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Ketebalan Rambut';
    protected static ?string $navigationGroup = 'Batang Rambut';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')
                ->label('Foto')
                ->image()
                ->directory('ketebalan_images')
                ->required(),

                TextInput::make('nama')
                    ->required()
                    ->label('Nama Ketebalan Rambut')
                    ->maxLength(50),

                Textarea::make('deskripsi')
                    ->required()
                    ->label('Deskripsi Ketebalan Rambut')
                    ->rows(5),
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
                    ->limit(50),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListKetebalanRambuts::route('/'),
            'create' => Pages\CreateKetebalanRambut::route('/create'),
            'edit' => Pages\EditKetebalanRambut::route('/{record}/edit'),
        ];
    }
}
