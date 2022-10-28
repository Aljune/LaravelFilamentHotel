<?php

namespace App\Filament\Widgets;

use App\Models\UnitRoom;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Unit Rooms', UnitRoom::where('unit_room_name', '>', now()->subDays(30))->count()),
            Card::make('Total Users', User::where('name', '>', now()->subDays(30))->count())
        ];
    }
}
