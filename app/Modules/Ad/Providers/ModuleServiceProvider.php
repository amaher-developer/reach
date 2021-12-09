<?php

namespace App\Modules\Ad\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('ad', 'Resources/Lang', 'app'), 'ad');
        $this->loadViewsFrom(module_path('ad', 'Resources/Views', 'app'), 'ad');
        $this->loadMigrationsFrom(module_path('ad', 'Database/Migrations', 'app'));
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('ad', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('ad', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
