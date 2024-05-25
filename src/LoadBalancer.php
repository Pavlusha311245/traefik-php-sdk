<?php

namespace TraefikPhpSdk;

use TraefikPhpSdk\LoadBalancer\HealthCheck;

/**
 * Class LoadBalancer
 *
 * @package TraefikPhpSdk
 * @property $servers
 * @property bool $passHostHeader
 */
class LoadBalancer extends \TraefikPhpSdk\Abstract\LoadBalancer
{
    /**
     * @var bool $passHostHeader The passHostHeader allows to forward client Host header to server.
     */
    private bool $passHostHeader = true;

    /**
     * @var HealthCheck $healthCheck The health check configuration for the load balancer
     */
    private HealthCheck $healthCheck;

    private $sticky;

    private $serversTransport;

    /**
     * @return HealthCheck
     */
    public function getHealthCheck(): HealthCheck
    {
        return $this->healthCheck;
    }

    /**
     * @param HealthCheck $healthCheck
     * @return LoadBalancer
     */
    public function setHealthCheck(HealthCheck $healthCheck): LoadBalancer
    {
        $this->healthCheck = $healthCheck;

        return $this;
    }

    /**
     * @param bool $passHostHeader
     * @return LoadBalancer
     */
    public function setPassHostHeader(bool $passHostHeader): LoadBalancer
    {
        $this->passHostHeader = $passHostHeader;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPassHostHeader(): bool
    {
        return $this->passHostHeader;
    }

    /**
     * @return array
     */
    public function getServers(): array
    {
        return $this->servers;
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            [
                'passHostHeader' => $this->passHostHeader,
            ]
        );
    }
}