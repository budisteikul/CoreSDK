<?php

namespace budisteikul\coresdk;

use Illuminate\Support\ServiceProvider;

class CoreSDKServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['router']->aliasMiddleware('CoreMiddleware', \budisteikul\coresdk\Middleware\CoreMiddleware::class);
        $this->app['router']->aliasMiddleware('CorsMiddleware', \budisteikul\coresdk\Middleware\CorsMiddleware::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'coresdk');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations/2020_11_17_000058_create_change_emails_table.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations/2020_11_17_014602_create_file_temps_table.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations/2020_11_19_140324_create_cache_table.php');
        $this->publishes([ __DIR__.'/publish/assets' => public_path(''),], 'budisteikul');
    }
}
