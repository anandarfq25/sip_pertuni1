<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KontakResource\Pages;
use App\Models\Kontak;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KontakResource extends Resource
{
    protected static ?string $model = Kontak::class;

    protected static ?string $navigationGroup = 'Kelola Website';

    protected static ?string $navigationLabel = 'Kontak & Sosial Media';

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('address') // Alamat
                    ->required()
                    ->maxLength(255)
                    ->label('Alamat'),

                Forms\Components\TextInput::make('phone') // Nomor telepon
                    ->required()
                    ->maxLength(50)
                    ->label('Nomor Telepon'),

                Forms\Components\TextInput::make('email') // Email 
                    ->required()
                    ->maxLength(100)
                    ->label('Email')
                    ->email(), // Validasi email

                Forms\Components\TextInput::make('whatsapp_url') // Link Whatsapp
                    ->nullable()
                    ->maxLength(255)
                    ->label('Link Whatsapp'),

                Forms\Components\TextInput::make('instagram_url') // Link Instagram
                    ->nullable()
                    ->maxLength(255)
                    ->label('Link Instagram'),

                Forms\Components\TextInput::make('youtube_url') // Link YouTube
                    ->nullable()
                    ->maxLength(255)
                    ->label('Link YouTube'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('address') // Menampilkan alamat
                    ->label('Alamat'),

                Tables\Columns\TextColumn::make('phone') // Menampilkan nomor telepon
                    ->label('Nomor Telepon'),

                Tables\Columns\TextColumn::make('email') // Menampilkan email
                    ->label('Email'),

                Tables\Columns\TextColumn::make('whatsapp_url') // Menampilkan link Whatsapp
                    ->label('Whatsapp'),

                Tables\Columns\TextColumn::make('instagram_url') // Menampilkan link Instagram
                    ->label('Instagram'),

                Tables\Columns\TextColumn::make('youtube_url') // Menampilkan link YouTube
                    ->label('YouTube'),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKontaks::route('/'),
            'create' => Pages\CreateKontak::route('/create'),
            // 'edit' => Pages\EditKontak::route('/{record}/edit'),
        ];
    }
}
