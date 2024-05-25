<?php

namespace TraefikPhpSdk\Traefik\Transport;

final class LifeCycle
{
    public function __construct(
        private string|int $requestAcceptGraceTimeout = '0s',
        private string|int $graceTimeOut = '10s',
    )
    {
        //
    }

    /**
     * @return string
     */
    public function getRequestAcceptGraceTimeout(): string
    {
        return $this->requestAcceptGraceTimeout;
    }

    /**
     * @return string
     */
    public function getGraceTimeOut(): string
    {
        return $this->graceTimeOut;
    }

    /**
     * @param string|int $requestAcceptGraceTimeout
     */
    public function setRequestAcceptGraceTimeout(string|int $requestAcceptGraceTimeout): void
    {
        $this->requestAcceptGraceTimeout = $requestAcceptGraceTimeout;
    }

    /**
     * @param string|int $graceTimeOut
     */
    public function setGraceTimeOut(string|int $graceTimeOut): void
    {
        $this->graceTimeOut = $graceTimeOut;
    }
}