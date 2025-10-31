<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
 use App\Providers\Filament\AdminPanelProvider;
use Filament\PanelRegistry;
class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       

    $this->app->singleton(PanelRegistry::class, function ($app) {
        $registry = new PanelRegistry($app);
        (new AdminPanelProvider($app))->register($registry);
        return $registry;
    });


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
