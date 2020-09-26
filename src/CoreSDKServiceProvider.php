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
        $this->loadMigrationsFrom(__DIR__.'/migrations/2019_01_05_160115_create_change_emails_table.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations/2020_08_16_042424_create_file_tmp_table.php');
        $this->publishes([ __DIR__.'/publish/assets' => public_path(''),], 'public');
        $this->publishes([ __DIR__.'/publish/layouts' => resource_path('views/layouts'),]);
    }
}
