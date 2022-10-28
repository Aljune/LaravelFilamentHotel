<?php

namespace App\Filament\Resources\UnitRoomResource\Pages;

use App\Filament\Resources\UnitRoomResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUnitRoom extends CreateRecord
{
    protected static string $resource = UnitRoomResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
