<?php

namespace TraefikPhpSdk\AbstractFactory;

use InvalidArgumentException;
use TraefikPhpSdk\Abstract\Service;
use TraefikPhpSdk\Protocols\Udp\{UdpRoute, UdpService};

/**
 * UdpFactory class extends the ProtocolFactory class.
 * It is responsible for creating UDP routes and services.
 *
 * @package TraefikPhpSdk\AbstractFactory
 */
class UdpFactory extends ProtocolFactory
{
    /**
     * @inheritDoc
     */
    static function createRoute(string $name, array $entrypoints, Service $service): UdpRoute
    {
        if (!$service instanceof UdpService) {
            throw new InvalidArgumentException('Service must be an instance of UdpService');
        }

        return new UdpRoute(name: $name, entrypoints: $entrypoints, service: $service);
    }

    /**
     * @inheritDoc
     */
    static function createService(string $name): UdpService
    {
        return new UdpService(name: $name);
    }
}