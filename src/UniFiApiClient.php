<?php

namespace Wharfs\UniFiApiClient;

use Wharfs\UniFiApiClient\Services\Concerns\HasFake;
use Exception;
use UniFi_API\Client as UniFi;

class UniFiApiClient
{
    use HasFake;

    public function __construct(
        protected array $config,
    ) {
    }

    public function getSites()
    {
        $response = [];

        try {
            $unifi_connection = new UniFi($this->config['user'], $this->config['password'], $this->config['url'], $this->config['site_id'], $this->config['version']);
            $debug_mode = $unifi_connection->set_debug($this->config['debug']);
            $loggedIn = $unifi_connection->login();

            if ($loggedIn == true) {
                $sites = $unifi_connection->list_sites();
            }
        } catch (exception $e) {
            echo "Failed to connect to UniFi Controller";
        }

        return $sites;
    }

    public function getDevices(string $id)
    {
        $response = [];

        try {
            $unifi_connection = new UniFi($this->config['user'], $this->config['password'], $this->config['url'], $this->config['site_id'], $this->config['version']);
            $debug_mode = $unifi_connection->set_debug($this->config['debug']);
            $loggedIn = $unifi_connection->login();
            if ($loggedIn == true) {
                $set_site = $unifi_connection->set_site($id);
                $devices = $unifi_connection->list_devices();
            }
        } catch (exception $e) {
            echo "Failed to connect to UniFi Controller";
        }

        return $devices;
    }

    public function getWlanConf(string $id)
    {
        $response = [];

        try {
            $unifi_connection = new UniFi($this->config['user'], $this->config['password'], $this->config['url'], $this->config['site_id'], $this->config['version']);
            $debug_mode = $unifi_connection->set_debug($this->config['debug']);
            $loggedIn = $unifi_connection->login();
            if ($loggedIn == true) {
                $set_site = $unifi_connection->set_site($id);
                $devices = $unifi_connection->list_wlanconf();
            }
        } catch (exception $e) {
            echo "Failed to connect to UniFi Controller";
        }

        return $devices;
    }
}
