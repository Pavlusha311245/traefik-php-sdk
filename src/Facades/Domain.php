<?php

namespace TraefikPhpSdk\Facades;

use TraefikPhpSdk\AbstractFactory\ProtocolFactory;

class Domain
{
    private ProtocolFactory $factory;

    private function __construct()
    {
    }

    public static function create(string $domain, array $routes, array $services, string $path = '')
    {
        $data = [
            'http' => []
        ];

        foreach ($routes as $route) {
            $data['http']['routes'][$route->getName()] = $route->toArray();
        }

        foreach ($services as $service) {
            $data['http']['services'][$service->getName()] = $service->toArray();
        }

        $yamlString = rtrim(ltrim(yaml_emit($data), "---\n"), "\n...\n");

        return file_put_contents($path . '/' . $domain . '.yaml', $yamlString);
    }
}