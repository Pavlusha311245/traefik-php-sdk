<?php

namespace TraefikPhpSdk\AbstractFactory;

use InvalidArgumentException;
use TraefikPhpSdk\Abstract\Service;
use TraefikPhpSdk\Protocols\Tcp\{TcpRoute, TcpService};

/**
 * Class TcpFactory
 *
 * The TcpFactory class provides static methods to create TCP routes and services.
 * It extends the ProtocolFactory class.
 *
 * @package TraefikPhpSdk\AbstractFactory
 */
class TcpFactory extends ProtocolFactory
{
    /**
     * @inheritDoc
     */
    static function createRoute(string $name, array $entrypoints, Service $service): TcpRoute
    {
        if (!$service instanceof TcpService) {
            throw new InvalidArgumentException('Service must be an instance of TcpService');
        }

        return new TcpRoute(name: $name, entrypoints: $entrypoints, service: $service);
    }

    /**
     * @inheritDoc
     */
    static function createService(string $name): TcpService
    {
        return new TcpService(name: $name);
    }
}