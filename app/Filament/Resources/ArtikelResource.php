<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationGroup = 'Kelola Website';

    protected static ?string $navigationLabel = 'Artikel & Berita';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title') // Judul artikel
                    ->required()
                    ->maxLength(255)
                    ->label('Judul Artikel'),

                Forms\Components\Textarea::make('content') // Isi artikel
                    ->required()
                    ->label('Isi Artikel'),

                Forms\Components\TextInput::make('slug') // Slug URL
                    ->required()
                    ->unique(Artikel::class, 'slug', fn($record) => $record) // Unique berdasarkan slug
                    ->maxLength(255)
                    ->label('Slug URL'),

                Forms\Components\FileUpload::make('media')
                    ->image()
                    ->disk('media_public') // Gunakan disk baru
                    ->directory('') // Kosongkan jika ingin di public/media langsung
                    ->nullable()
                    ->label('Gambar'),

                Forms\Components\DateTimePicker::make('published_at') // Tanggal publikasi
                    ->nullable()
                    ->label('Tanggal Publikasi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Judul Artikel'),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug URL'),

                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Tanggal Publikasi'),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
