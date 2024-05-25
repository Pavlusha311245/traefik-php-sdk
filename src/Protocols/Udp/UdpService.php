<?php

namespace TraefikPhpSdk\Protocols\Udp;

use TraefikPhpSdk\Abstract\Service;

class UdpService extends Service
{
    /**
     * Converts the object to YAML format.
     *
     * @return string The YAML representation of the object.
     */
    public function toYaml(): string
    {
        $yamlString = yaml_emit(
            data: [$this->getName() => $this->toArray()]
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
            data: [$this->getName() => $this->toArray()],
            encoding: YAML_UTF8_ENCODING,
        );
    }
}