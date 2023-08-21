<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Inventory;
use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Customers', Customer::count())
            ->icon('heroicon-o-user'),
            Stat::make('Orders', Order::count())
            ->icon('heroicon-o-shopping-cart'),
            Stat::make('Item in Inventory', Inventory::count())
            ->icon('heroicon-o-archive-box'),
        ];
    }
}
