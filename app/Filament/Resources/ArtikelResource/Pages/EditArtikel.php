<?php

namespace App\Filament\Resources\ArtikelResource\Pages;

use App\Filament\Resources\ArtikelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtikel extends EditRecord
{
    protected static string $resource = ArtikelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(), // Tombol Hapus masih tersedia di sebelah atas
        ];
    }
    
    protected function getRedirectUrl(): string
    {
        // Setelah menyimpan, akan kembali ke halaman daftar (indeks) Artikel
        return $this->getResource()::getUrl('index');
    }
}
