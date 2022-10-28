<?php

namespace App\Filament\Resources\UnitRoomResource\Pages;

use App\Filament\Resources\UnitRoomResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnitRoom extends EditRecord
{
    protected static string $resource = UnitRoomResource::class;

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
