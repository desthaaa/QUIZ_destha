<?php

namespace App\Filament\Resources\TSupplierResource\Pages;

use App\Filament\Resources\TSupplierResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTSuppliers extends ListRecords
{
    protected static string $resource = TSupplierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
