<?php

namespace App\Filament\Resources\ArtikelResource\Pages;

use App\Filament\Resources\ArtikelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArtikel extends CreateRecord
{
    protected static string $resource = ArtikelResource::class;

    protected function getRedirectUrl(): string
    {
        // Pastikan redirect URL setelah create selalu ke index
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationRedirectUrl(): ?string
    {
        // Saat sukses create, juga arahkan ke index
        return $this->getResource()::getUrl('index');
    }
}
