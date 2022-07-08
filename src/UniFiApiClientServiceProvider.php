<?php

namespace Wharfs\UniFiApiClient;

use Wharfs\UniFiApiClient\UniFiApiClient as Client;
use Illuminate\Support\ServiceProvider;

class UniFiApiClientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(Client::class, function ($app) {
            return new Client(
                config: array(
                    "url" => config('unifi.config.url'),
                    "user" => config('unifi.config.user'),
                    "password" => config('unifi.config.password'),
                    "version" => config('unifi.config.version'),
                    "site_id" => config('unifi.config.site_id'),
                    "debug" => config('unifi.config.debug', false),
                )
            );
        });
    }
}
