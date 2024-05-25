<?php

namespace TraefikPhpSdk\LoadBalancer;

/**
 * Class Server
 *
 * Servers declare a single instance of your program. The url option point to a specific instance.
 *
 * @property string $url
 */
final class Server
{

    public function __construct(
        /**
         * @var string $url
         *
         * The URL property represents the URL of the current instance.
         */
        private string $url
    )
    {
        //
    }

    /**
     * Get the URL of the current instance.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set the URL of the current instance.
     *
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}