<?php

namespace App\Filament\Widgets;

use App\Models\Feedback;
use App\Models\Product;
use App\Models\User;
use App\Models\UserProduct;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Pengguna', User::count()),
            Card::make('Total Produk', Product::count()),
            Card::make('Saran Masuk', Feedback::count()),
            Card::make('Produk Kiriman Pengguna', UserProduct::count())
        ];
    }
}
