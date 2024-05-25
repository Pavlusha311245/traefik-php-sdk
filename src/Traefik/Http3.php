<?php

namespace TraefikPhpSdk\Traefik;

class Http3
{
    public function __construct(
        private int $advertisedPort = 443
    )
    {
        //
    }

    /**
     * @return int
     */
    public function getAdvertisedPort(): int
    {
        return $this->advertisedPort;
    }

    /**
     * @param int $advertisedPort
     */
    public function setAdvertisedPort(int $advertisedPort): void
    {
        $this->advertisedPort = $advertisedPort;
    }
}