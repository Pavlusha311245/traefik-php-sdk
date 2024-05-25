<?php

namespace TraefikPhpSdk\Protocols\Tcp;

use TraefikPhpSdk\Abstract\Service;

class TcpService extends Service
{
    /**
     * Converts the object to YAML format.
     *
     * @return string The YAML representation of the object.
     */
    public function toYaml(): string
    {
        $yamlString = yaml_emit(data: $this->toArray());

        $yamlString = rtrim(ltrim($yamlString, "---\n"), "\n...\n");

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
}