<?php

namespace App\Filament\Resources\UnitTypeResource\Pages;

use App\Filament\Resources\UnitTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnitType extends EditRecord
{
    protected static string $resource = UnitTypeResource::class;

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
