<?php

namespace App\Providers;

use App\Models\Information;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Une seule requête par requête HTTP, quel que soit le nombre de vues
        $this->app->singleton(Information::class, fn() => Information::current());
    }

    public function boot(): void
    {
        View::composer('*', fn($view) => $view->with('info', app(Information::class)));
    }
}
