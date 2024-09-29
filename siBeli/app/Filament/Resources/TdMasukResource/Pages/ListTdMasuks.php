<?php

namespace App\Filament\Resources\TdMasukResource\Pages;

use App\Filament\Resources\TdMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTdMasuks extends ListRecords
{
    protected static string $resource = TdMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
