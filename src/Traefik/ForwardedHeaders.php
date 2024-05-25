<?php

namespace TraefikPhpSdk\Traefik;

final class ForwardedHeaders
{
    /**
     * Insecure Mode (Always Trusting Forwarded Headers).
     *
     * @var bool $insecure
     */
    private bool $insecure = false;

    /**
     * Trusting Forwarded Headers from specific IPs.
     *
     * @var array $trustedIPs
     */
    private array $trustedIPs = [];

    public function __construct()
    {
    }

    /**
     * @return array
     */
    public function getTrustedIPs(): array
    {
        return $this->trustedIPs;
    }

    /**
     * @return bool
     */
    public function isInsecure(): bool
    {
        return $this->insecure;
    }

    /**
     * @param bool $insecure
     */
    public function setInsecure(bool $insecure): void
    {
        $this->insecure = $insecure;
    }

    /**
     * @param array $trustedIPs
     */
    public function setTrustedIPs(array $trustedIPs): void
    {
        $this->trustedIPs = $trustedIPs;
    }
}