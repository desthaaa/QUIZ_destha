<?php

namespace App\Filament\Resources\TSupplierResource\Pages;

use App\Filament\Resources\TSupplierResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTSupplier extends EditRecord
{
    protected static string $resource = TSupplierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
