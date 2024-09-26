<?php

namespace App\Filament\Resources\TBarangResource\Pages;

use App\Filament\Resources\TBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTBarang extends EditRecord
{
    protected static string $resource = TBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
