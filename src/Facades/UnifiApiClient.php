<?php

namespace Wharfs\UnifiApiClient\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wharfs\UnifiApiClient\UnifiApiClient
 */
class UnifiApiClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unifi-api-client';
    }
}
