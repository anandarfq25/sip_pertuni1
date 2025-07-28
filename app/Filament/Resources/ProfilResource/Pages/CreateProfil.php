<?php

namespace App\Filament\Resources\ProfilResource\Pages;

use App\Filament\Resources\ProfilResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProfil extends CreateRecord
{
    protected static string $resource = ProfilResource::class;

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
