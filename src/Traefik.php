<?php

namespace TraefikPhpSdk;

use SplObjectStorage;
use TraefikPhpSdk\Traefik\Api;
use TraefikPhpSdk\Traefik\Ping;

class Traefik
{
    private SplObjectStorage $providers;

    private Api $api;

    private Ping $ping;

    public function __construct()
    {
        $this->providers = new SplObjectStorage();
    }

    public function addProvider($provider): void
    {
        $this->providers->attach($provider);
    }

    public function removeProvider($provider): void
    {
        $this->providers->detach($provider);
    }

    public function getProviders(): SplObjectStorage
    {
        return $this->providers;
    }
}