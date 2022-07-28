<?php

namespace Wharfs\UniFiApiClient;

//use Spatie\LaravelPackageTools\Package;
//use Spatie\LaravelPackageTools\PackageServiceProvider;
//use Wharfs\UniFiApiClient\Commands\UniFiApiClientCommand;
use Illuminate\Support\ServiceProvider;
use Wharfs\UniFiApiClient\UniFiApiClient as Client;

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
                config: [
                    "url" => config('unifi.config.url'),
                    "user" => config('unifi.config.user'),
                    "password" => config('unifi.config.password'),
                    "version" => config('unifi.config.version'),
                    "site_id" => config('unifi.config.site_id'),
                    "debug" => config('unifi.config.debug', false),
                ]
            );
        });
    }

    // public function configurePackage(Package $package): void
    // {
    //     /*
    //      * This class is a Package Service Provider
    //      *
    //      * More info: https://github.com/spatie/laravel-package-tools
    //      */
    //     $package
    //         ->name('laravel-unifi-api')
    //         ->hasConfigFile()
    //         ->hasViews()
    //         ->hasMigration('create_laravel-unifi-api_table')
    //         ->hasCommand(UniFiApiClientCommand::class);
    // }
}
