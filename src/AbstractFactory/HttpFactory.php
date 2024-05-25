<?php

namespace TraefikPhpSdk\AbstractFactory;

use InvalidArgumentException;
use TraefikPhpSdk\Abstract\Service;
use TraefikPhpSdk\Protocols\Http\{HttpRoute, HttpService};

/**
 * Class HttpFactory
 *
 * This class is responsible for creating HTTP routes and services.
 *
 * @package TraefikPhpSdk\AbstractFactory
 */
class HttpFactory extends ProtocolFactory
{
    /**
     * @inheritDoc
     */
    public static function createRoute(string $name, array $entrypoints, Service $service): HttpRoute
    {
        if (!$service instanceof HttpService) {
            throw new InvalidArgumentException('Service must be an instance of HttpService');
        }

        return new HttpRoute(name: $name, entrypoints: $entrypoints, service: $service);
    }

    /**
     * @inheritDoc
     */
    public static function createService(string $name): HttpService
    {
        return new HttpService(name: $name);
    }
}