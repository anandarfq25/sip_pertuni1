<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use PhpParser\Node\Stmt\Static_;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationGroup = 'Kelola Website';

    protected static ?string $navigationLabel = 'Galeri & Photo';

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title') // Judul gambar atau album
                    ->required()
                    ->maxLength(255)
                    ->label('Judul Galeri'),

                Forms\Components\Textarea::make('description') // Deskripsi gambar
                    ->nullable()
                    ->label('Deskripsi Galeri'),

                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->disk('media_public') // Gunakan disk baru
                    ->directory('') // Kosongkan jika ingin di public/media langsung
                    ->nullable()
                    ->label('Gambar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Judul Galeri'),

                // Tables\Columns\ImageColumn::make('image') // Menampilkan gambar di kolom
                //     ->disk('public')
                //     ->label('Gambar'),

                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi'),
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
