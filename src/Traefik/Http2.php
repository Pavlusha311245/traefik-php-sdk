<?php

namespace TraefikPhpSdk\Traefik;

class Http2
{
    public function __construct(
        private int $maxConcurrentStreams = 250
    )
    {
        //
    }

    /**
     * @return int
     */
    public function getMaxConcurrentStreams(): int
    {
        return $this->maxConcurrentStreams;
    }

    /**
     * @param int $maxConcurrentStreams
     */
    public function setMaxConcurrentStreams(int $maxConcurrentStreams): void
    {
        $this->maxConcurrentStreams = $maxConcurrentStreams;
    }
}