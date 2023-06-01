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

    public function beforeFill()
    {
        if ($this->record->payments()->exists()) {
            $this->notify('danger','Cannot edit code after user payment has been made');
            $this->redirect($this->getResource()::getUrl('index'));
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
