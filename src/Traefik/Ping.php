<?php

namespace TraefikPhpSdk\Traefik;

class Ping
{
    /**
     * @var string $entryPoint The entry point to ping
     */
    private string $entryPoint = 'traefik';

    /**
     * @var bool $manualRouting Enable manual routing
     */
    private bool $manualRouting = false;

    /**
     * @var int $terminatingStatusCode The status code to return when terminating
     */
    private int $terminatingStatusCode = 503;

    public function __construct()
    {
        //
    }

    /**
     * @return string
     */
    public function getEntryPoint(): string
    {
        return $this->entryPoint;
    }

    /**
     * @return int
     */
    public function getTerminatingStatusCode(): int
    {
        return $this->terminatingStatusCode;
    }

    /**
     * @return bool
     */
    public function isManualRouting(): bool
    {
        return $this->manualRouting;
    }

    /**
     * @param string $entryPoint
     */
    public function setEntryPoint(string $entryPoint): void
    {
        $this->entryPoint = $entryPoint;
    }

    /**
     * @param bool $manualRouting
     */
    public function setManualRouting(bool $manualRouting): void
    {
        $this->manualRouting = $manualRouting;
    }

    /**
     * @param int $terminatingStatusCode
     */
    public function setTerminatingStatusCode(int $terminatingStatusCode): void
    {
        $this->terminatingStatusCode = $terminatingStatusCode;
    }
}