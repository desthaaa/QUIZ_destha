<?php

namespace App\Filament\Resources\TdMasukResource\Pages;

use App\Filament\Resources\TdMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTdMasuk extends EditRecord
{
    protected static string $resource = TdMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
