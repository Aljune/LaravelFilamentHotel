<?php

namespace App\Filament\Resources\UnitRoomResource\Pages;

use App\Filament\Resources\UnitRoomResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnitRooms extends ListRecords
{
    protected static string $resource = UnitRoomResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
