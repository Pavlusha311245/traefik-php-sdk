<?php

namespace TraefikPhpSdk\Traefik\Transport;

final class RespondingTimeouts
{
    public function __construct(
        private string|int $readTimeout = '60s',
        private string|int $writeTimeout = '0s',
        private string|int $idleTimeout = '180s',
    )
    {
        //
    }

    /**
     * @return string
     */
    public function getReadTimeout(): string
    {
        return $this->readTimeout;
    }

    /**
     * @return string
     */
    public function getWriteTimeout(): string
    {
        return $this->writeTimeout;
    }

    /**
     * @return string
     */

    public function getIdleTimeout(): string
    {
        return $this->idleTimeout;
    }

    /**
     * @param string|int $readTimeout
     */
    public function setReadTimeout(string|int $readTimeout): void
    {
        $this->readTimeout = $readTimeout;
    }

    /**
     * @param string|int $writeTimeout
     */
    public function setWriteTimeout(string|int $writeTimeout): void
    {
        $this->writeTimeout = $writeTimeout;
    }

    /**
     * @param string|int $idleTimeout
     */
    public function setIdleTimeout(string|int $idleTimeout): void
    {
        $this->idleTimeout = $idleTimeout;
    }
}