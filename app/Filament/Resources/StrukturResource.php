<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StrukturResource\Pages;
use App\Filament\Resources\StrukturResource\RelationManagers;
use App\Models\Struktur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StrukturResource extends Resource
{
    protected static ?string $model = Struktur::class;

    protected static ?string $navigationGroup = 'Kelola Website';

    protected static ?string $navigationLabel = 'Struktural Organisasi';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Anggota')
                    ->required()
                    ->maxLength(255),

                TextInput::make('position')
                    ->label('Posisi')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('photo')
                    ->disk('struktur') // Gunakan disk baru
                    ->directory('') // Kosongkan jika ingin di public/media langsung
                    ->nullable()
                    ->label('Media (Gambar atau PDF)')
                    ->maxSize(10240), // Maksimal ukuran file 10MB

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->nullable()
                    ->maxLength(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Anggota')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('position')
                    ->label('Posisi')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50),
            ])
            ->filters([
                // Define filters if needed
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
            // Define relations if any
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStrukturs::route('/'),
            'create' => Pages\CreateStruktur::route('/create'),
            'edit' => Pages\EditStruktur::route('/{record}/edit'),
        ];
    }
}
