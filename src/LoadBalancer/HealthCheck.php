<?php

namespace TraefikPhpSdk\LoadBalancer;

/**
 * Class HealthCheck
 *
 * Configure health check to remove unhealthy servers from the load balancing rotation. Traefik will consider your servers healthy as long as they return status codes between 2XX and 3XX to the health check requests (carried out every interval).
 * To propagate status changes (e.g. all servers of this service are down) upwards, HealthCheck must also be enabled on the parent(s) of this service.
 *
 * @property string $path
 * @property string|null $scheme
 * @property string|null $hostname
 * @property int|null $port
 * @property int $interval
 * @property int $timeout
 * @property array|null $headers
 * @property bool $followRedirects
 * @property string $method
 */
class HealthCheck
{

    /**
     * The server URL path for the health check endpoint
     *
     * @var string
     */
    private string $path;

    /**
     * The server URL scheme for the health check endpoint
     *
     * @var string|null
     */
    private ?string $scheme = null;

    /**
     * The value of hostname in the Host header of the health check request
     *
     * @var string|null
     */
    private ?string $hostname = null;

    /**
     * The server URL port for the health check endpoint
     *
     * @var int|null
     */
    private ?int $port = null;

    /**
     * The frequency of the health check calls
     *
     * @var int
     */
    private int $interval = 30;

    /**
     * The maximum duration Traefik will wait for a health check request
     *
     * @var int
     */
    private int $timeout = 5;

    /**
     * Custom headers to be sent to the health check endpoint
     *
     * @var array|null
     */
    private ?array $headers = null;

    /**
     * Whether redirects should be followed during the health check calls
     *
     * @var bool
     */
    private bool $followRedirects = true;

    /**
     * The HTTP method that will be used while connecting to the endpoint
     *
     * @var string
     */
    private string $method = 'GET';

    public function __construct()
    {
        //
    }


    /**
     * Get the server URL path for the health check endpoint
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Get the server URL scheme for the health check endpoint
     *
     * @return string|null
     */
    public function getScheme(): ?string
    {
        return $this->scheme;
    }

    /**
     * Get the value of hostname in the Host header of the health check request
     *
     * @return string|null
     */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    /**
     * Get the server URL port for the health check endpoint
     *
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * Get the frequency of the health check calls
     *
     * @return int
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * Get the maximum duration Traefik will wait for a health check request
     *
     * @return int
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * Get custom headers to be sent to the health check endpoint
     *
     * @return array|null
     */
    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    /**
     * Determine whether redirects should be followed during the health check calls
     *
     * @return bool
     */
    public function isFollowRedirects(): bool
    {
        return $this->followRedirects;
    }

    /**
     * Get the HTTP method that will be used while connecting to the endpoint
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }


    /**
     * Converts the HealthCheck class properties to an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'path' => $this->getPath(),
            'scheme' => $this->getScheme(),
            'hostname' => $this->getHostname(),
            'port' => $this->getPort(),
            'interval' => $this->getInterval(),
            'timeout' => $this->getTimeout(),
            'headers' => $this->getHeaders(),
            'followRedirects' => $this->isFollowRedirects(),
            'method' => $this->getMethod(),
        ];
    }
}