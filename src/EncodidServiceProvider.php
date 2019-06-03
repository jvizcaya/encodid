<?php

namespace Jvizcaya\Encodid;

use Illuminate\Support\ServiceProvider;


class EncodidServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/Config/encodid.php' => config_path('encodid.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'/Config/encodid.php', 'encodid'
        );    
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
