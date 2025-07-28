<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilResource\Pages;
use App\Models\Profil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProfilResource extends Resource
{
    protected static ?string $model = Profil::class;

    protected static ?string $navigationGroup = 'Kelola Website';

    protected static ?string $navigationLabel = 'Profil';

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title') // Kolom untuk judul profil
                    ->required()
                    ->maxLength(255)
                    ->label('Judul Profil'),

                Forms\Components\Textarea::make('description') // Kolom untuk deskripsi
                    ->required()
                    ->label('Deskripsi')
                    ->rows(5), // Menentukan jumlah baris untuk textarea
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title') // Menampilkan judul profil
                    ->label('Judul Profil'),

                Tables\Columns\TextColumn::make('description') // Menampilkan deskripsi
                    ->label('Deskripsi')
                    ->limit(100), // Membatasi tampilan deskripsi di tabel (hanya 100 karakter pertama)
            ])
            ->filters([
                // Add filters if needed
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
            // Add relationships if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfils::route('/'),
            'create' => Pages\CreateProfil::route('/create'),
            'edit' => Pages\EditProfil::route('/{record}/edit'),
        ];
    }
}
