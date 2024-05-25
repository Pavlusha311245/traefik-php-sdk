<?php

namespace TraefikPhpSdk\Abstract;

use TraefikPhpSdk\Contracts\Arrayable;

/**
 * Class LoadBalancer
 *
 * TODO: Implement LoadBalancer class
 */
abstract class LoadBalancer implements Arrayable
{
    private $servers;

    public function __construct(...$servers)
    {
        $this->servers = $servers;
    }

    /**
     * @param mixed $servers
     */
    public function setServers($servers): void
    {
        $this->servers = $servers;
    }

    /**
     * @return mixed
     */
    public function getServers()
    {
        return $this->servers;
    }

    public function toArray(): array
    {
        return [
            'servers' => $this->servers,
        ];
    }
}