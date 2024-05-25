<?php

namespace TraefikPhpSdk\Traefik;

class Api
{
    /**
     * @var bool $dashboard Enable the dashboard
     */
    private bool $dashboard = true;

    /**
     * @var bool $insecure Skip the verification of the TLS certificate of the API
     */
    private bool $insecure = false;

    /**
     * @var bool $debug Enable debug mode
     */
    private bool $debug = false;

    public function __construct()
    {
        //
    }

    /**
     * @return bool
     */
    public function isDashboard(): bool
    {
        return $this->dashboard;
    }

    /**
     * @return bool
     */
    public function isInsecure(): bool
    {
        return $this->insecure;
    }

    /**
     * @return bool
     */
    public function isDebug(): bool
    {
        return $this->debug;
    }

    /**
     * @param bool $dashboard
     */
    public function setDashboard(bool $dashboard): void
    {
        $this->dashboard = $dashboard;
    }

    /**
     * @param bool $insecure
     */
    public function setInsecure(bool $insecure): void
    {
        $this->insecure = $insecure;
    }

    /**
     * @param bool $debug
     */
    public function setDebug(bool $debug): void
    {
        $this->debug = $debug;
    }
}