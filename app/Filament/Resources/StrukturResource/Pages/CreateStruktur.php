<?php

namespace App\Filament\Resources\StrukturResource\Pages;

use App\Filament\Resources\StrukturResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStruktur extends CreateRecord
{
    protected static string $resource = StrukturResource::class;

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
