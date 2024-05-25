<?php

namespace TraefikPhpSdk\Traefik;

final class ProxyProtocol
{
    public function __construct(
        private array $trustedIPs,
        private bool  $insecure
    )
    {
        //
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
     * @param array $trustedIPs
     */
    public function setTrustedIPs(array $trustedIPs): void
    {
        $this->trustedIPs = $trustedIPs;
    }

    /**
     * @param bool $insecure
     */
    public function setInsecure(bool $insecure): void
    {
        $this->insecure = $insecure;
    }
}