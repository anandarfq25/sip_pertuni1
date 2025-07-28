<?php

namespace App\Filament\Resources\GaleriResource\Pages;

use App\Filament\Resources\GaleriResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGaleri extends CreateRecord
{
    protected static string $resource = GaleriResource::class;

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
