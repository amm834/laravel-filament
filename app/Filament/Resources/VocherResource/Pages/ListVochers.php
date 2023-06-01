<?php

namespace App\Filament\Resources\VocherResource\Pages;

use App\Filament\Resources\VocherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVochers extends ListRecords
{
    protected static string $resource = VocherResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
