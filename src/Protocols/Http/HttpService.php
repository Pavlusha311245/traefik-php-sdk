<?php

namespace TraefikPhpSdk\Protocols\Http;

use TraefikPhpSdk\Abstract\Service;
use TraefikPhpSdk\Contracts\Arrayable;
use TraefikPhpSdk\LoadBalancer;

class HttpService extends Service implements Arrayable
{
    private $loadBalancer;
    private $serversTransports;
    private $weighted;
    private $mirroring;
    private $failover;

    /**
     * @param LoadBalancer $loadBalancer
     */
    public function setLoadBalancer(LoadBalancer $loadBalancer): void
    {
        $this->loadBalancer = $loadBalancer;
    }

    /**
     * Converts the object to YAML format.
     *
     * @return string The YAML representation of the object.
     */
    public function toYaml(): string
    {
        $yamlString = yaml_emit(
            data: $this->toArray()
        );

        $yamlString = ltrim($yamlString, "---\n");
        $yamlString = rtrim($yamlString, "\n...\n");

        return $yamlString;
    }

    /**
     * @param string $filename
     * @return void
     */
    public function toYamlFile(string $filename): void
    {
        yaml_emit_file(
            filename: $filename,
            data: $this->toArray(),
            encoding: YAML_UTF8_ENCODING,
        );
    }

    /**
     * Prepares the YAML data.
     *
     * @return array The prepared YAML data.
     */
    public function toArray(): array
    {
        $data = [];

        if (!empty($this->loadBalancer)) {
            $data['loadBalancer'] = $this->loadBalancer->toArray();
        }

        return [
            $this->getName() => $data
        ];
    }
}