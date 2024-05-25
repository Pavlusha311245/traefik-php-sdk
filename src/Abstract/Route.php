<?php

namespace TraefikPhpSdk\Abstract;

use TraefikPhpSdk\Contracts\Arrayable;
use TraefikPhpSdk\Protocols\Http\HttpService;

/**
 * Class Route
 *
 * @package TraefikPhpSdk\Abstract
 * @meta The character @ is not authorized in the router name
 *
 * @property string $rule
 * @property array $entrypoints
 * @property $service
 */
abstract class Route implements Arrayable
{
    private ?Service $service = null;

    public function __construct(
        /**
         * The name of the router.
         */
        private string $name,
        private array  $entrypoints,
        Service        $service
    )
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function getEntrypoints()
    {
        return $this->entrypoints;
    }

    /**
     * @param mixed $entrypoints
     */
    public function setEntrypoints($entrypoints): void
    {
        $this->entrypoints = $entrypoints;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Converts the object to YAML format.
     *
     * @return string The YAML representation of the object.
     */
    public function toYaml(): string
    {
        return rtrim(ltrim(yaml_emit(data: [$this->getName() => $this->toArray()]), "---\n"), "\n...\n");
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

    /**
     * Converts the object to an associative array.
     *
     * @return array The associative array representation of the object.
     */
    public function toArray(): array
    {
        $data = [
            'entryPoints' => $this->getEntrypoints(),
            'service' => $this->service->getName()
        ];

        return $data;
    }
}