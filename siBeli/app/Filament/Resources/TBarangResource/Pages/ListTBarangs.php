<?php

namespace App\Filament\Resources\TBarangResource\Pages;

use App\Filament\Resources\TBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTBarangs extends ListRecords
{
    protected static string $resource = TBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
