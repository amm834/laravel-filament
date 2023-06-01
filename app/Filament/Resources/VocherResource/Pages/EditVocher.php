<?php

namespace App\Filament\Resources\VocherResource\Pages;

use App\Filament\Resources\VocherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVocher extends EditRecord
{
    protected static string $resource = VocherResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
