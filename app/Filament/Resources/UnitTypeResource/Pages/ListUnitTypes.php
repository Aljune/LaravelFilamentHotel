<?php

namespace App\Filament\Resources\UnitTypeResource\Pages;

use App\Filament\Resources\UnitTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnitTypes extends ListRecords
{
    protected static string $resource = UnitTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
