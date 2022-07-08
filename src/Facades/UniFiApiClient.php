<?php

namespace Wharfs\UniFiApiClient\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wharfs\UniFiApiClient\UniFiApiClient
 */
class UniFiApiClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unifi-api-client';
    }
}
