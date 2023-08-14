<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected function getStats(): array
    {
        return [
            // Customers
            Card::make('Customers', Customer::count())
            ->icon('heroicon-o-users'),

            // Products
            Card::make('Products', Product::count())
            ->icon('heroicon-o-archive-box'),

            // Orders
            Card::make('Orders', '20')
            ->icon('heroicon-o-shopping-cart'),
        ];
    }
}
