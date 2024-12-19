<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\TeksturRambut;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeksturRambutResource\Pages;
use App\Filament\Resources\TeksturRambutResource\RelationManagers;

class TeksturRambutResource extends Resource
{
    protected static ?string $model = TeksturRambut::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Tekstur Rambut';
    protected static ?string $navigationGroup = 'Batang Rambut';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')
                ->label('Foto')
                ->image()
                ->directory('tekstur_images')
                ->required(),

                TextInput::make('nama')
                    ->label('Nama Tekstur Rambut')
                    ->required()
                    ->maxLength(255),

                Textarea::make('deskripsi')
                    ->label('Deskripsi Tekstur Rambut')
                    ->required(),
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
                    ->label('Nama Tekstur Rambut')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50), // Batasi tampilan deskripsi di tabel
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
            'index' => Pages\ListTeksturRambuts::route('/'),
            'create' => Pages\CreateTeksturRambut::route('/create'),
            'edit' => Pages\EditTeksturRambut::route('/{record}/edit'),
        ];
    }
}
