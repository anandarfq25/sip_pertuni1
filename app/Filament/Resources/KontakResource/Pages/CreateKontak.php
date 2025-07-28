<?php

namespace App\Filament\Resources\KontakResource\Pages;

use App\Filament\Resources\KontakResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKontak extends CreateRecord
{
    protected static string $resource = KontakResource::class;

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
