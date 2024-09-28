<?php

namespace App\Filament\Resources\TMasukResource\Pages;

use App\Filament\Resources\TMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTMasuks extends ListRecords
{
    protected static string $resource = TMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
