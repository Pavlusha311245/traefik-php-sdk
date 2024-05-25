<?php

namespace TraefikPhpSdk\Providers;

use TraefikPhpSdk\Providers\DockerProvider\Tls;

class DockerProvider
{
    public const string PROVIDER = 'docker';

    private string $endpoint = 'unix:///var/run/docker.sock';

    private bool $useBindPortIP = false;

    private bool $exposedByDefault = true;

    private string $network = '';

    private string $defaultRule = 'Host(`{{ normalize .Name }}`)';

    private bool $swarmMode = false;

    private int $swarmModeRefreshSeconds = 15;

    private int $httpClientTimeout = 10;

    private bool $watch = true;

    private string $constraints = '';

    private ?Tls $tls = null;

    private bool $allowEmptyServices = false;

    public function __construct()
    {
        //
    }


    /**
     * Get the value of endpoint
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * Get the value of useBindPortIP
     *
     * @return bool
     */
    public function getUseBindPortIP(): bool
    {
        return $this->useBindPortIP;
    }

    /**
     * Get the value of exposedByDefault
     *
     * @return bool
     */
    public function getExposedByDefault(): bool
    {
        return $this->exposedByDefault;
    }

    /**
     * Get the value of network
     *
     * @return string
     */
    public function getNetwork(): string
    {
        return $this->network;
    }

    /**
     * Get the value of defaultRule
     *
     * @return string
     */
    public function getDefaultRule(): string
    {
        return $this->defaultRule;
    }

    /**
     * Get the value of swarmMode
     *
     * @return bool
     */
    public function getSwarmMode(): bool
    {
        return $this->swarmMode;
    }

    /**
     * Get the value of swarmModeRefreshSeconds
     *
     * @return int
     */
    public function getSwarmModeRefreshSeconds(): int
    {
        return $this->swarmModeRefreshSeconds;
    }

    /**
     * Get the value of httpClientTimeout
     *
     * @return int
     */
    public function getHttpClientTimeout(): int
    {
        return $this->httpClientTimeout;
    }

    /**
     * Get the value of watch
     *
     * @return bool
     */
    public function getWatch(): bool
    {
        return $this->watch;
    }

    /**
     * Get the value of constraints
     *
     * @return string
     */
    public function getConstraints(): string
    {
        return $this->constraints;
    }

    /**
     * Get the value of tls
     *
     * @return ?Tls
     */
    public function getTls(): ?Tls
    {
        return $this->tls;
    }

    /**
     * Get the value of allowEmptyServices
     *
     * @return bool
     */
    public function getAllowEmptyServices(): bool
    {
        return $this->allowEmptyServices;
    }
}