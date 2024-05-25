<?php

namespace TraefikPhpSdk\AbstractFactory;

use TraefikPhpSdk\Abstract\{Route, Service};

/**
 * The ProtocolFactory abstract class is responsible for creating routes and services.
 * Subclasses must implement the createRoute and createService methods.
 *
 * @package TraefikPhpSdk\AbstractFactory
 */
abstract class ProtocolFactory
{
    /**
     * Create a route with the given name, entrypoints, and service.
     *
     * @param string $name The name of the route.
     * @param array $entrypoints The entrypoints for the route.
     * @param Service $service The service associated with the route.
     *
     * @return Route The created route object.
     */
    abstract static function createRoute(string $name, array $entrypoints, Service $service): Route;

    /**
     * Create a service with the given name.
     *
     * @param string $name The name of the service.
     *
     * @return Service The created service object.
     */
    abstract static function createService(string $name): Service;
}