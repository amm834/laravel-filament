<?php

namespace App\Filament\Resources\VocherResource\Pages;

use App\Filament\Resources\VocherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVocher extends CreateRecord
{
    protected static string $resource = VocherResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
