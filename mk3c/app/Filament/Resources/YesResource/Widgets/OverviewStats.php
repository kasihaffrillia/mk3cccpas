<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class OverviewStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Categories', \App\Models\Category::count())
                ->description('Categories in the system'),
            Card::make('Users Registered', \App\Models\User::count())
                ->description('Total users'),
        ];
    }
}
