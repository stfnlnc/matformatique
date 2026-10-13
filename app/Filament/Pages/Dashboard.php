<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Support\Icons\Heroicon;

class Dashboard extends BaseDashboard
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    // Optionnel : icône quand l'entrée est active
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::ChartBar;
}
