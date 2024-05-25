<?php

namespace TraefikPhpSdk\Traefik;

use TraefikPhpSdk\Traefik\Transport\LifeCycle;
use TraefikPhpSdk\Traefik\Transport\RespondingTimeouts;

class Transport
{
    /**
     * respondingTimeouts are timeouts for incoming requests to the Traefik instance. Setting them has no effect for UDP entryPoints.
     *
     * https://doc.traefik.io/traefik/routing/entrypoints/#respondingtimeouts
     *
     * @var RespondingTimeouts|null
     */
    private ?RespondingTimeouts $respondingTimeouts = null;

    /**
     * Controls the behavior of Traefik during the shutdown phase.
     *
     * https://doc.traefik.io/traefik/routing/entrypoints/#lifecycle
     *
     * @var LifeCycle|null $lifeCycle
     */
    private ?LifeCycle $lifeCycle = null;

    /**
     * The maximum number of requests Traefik can handle before sending a Connection:
     * Close header to the client (for HTTP2, Traefik sends a GOAWAY). Zero means no limit.
     *
     * @var string|int $keepAliveMaxRequests
     */
    private string|int $keepAliveMaxRequests = 0;

    /**
     * The maximum duration Traefik can handle requests before sending a Connection:
     * Close header to the client (for HTTP2, Traefik sends a GOAWAY). Zero means no limit.
     *
     * @var string|int $keepAliveMaxTime
     */
    private string|int $keepAliveMaxTime = '0s';

    public function __construct()
    {
        //
    }

    /**
     * @return RespondingTimeouts|null
     */
    public function getRespondingTimeouts(): ?RespondingTimeouts
    {
        return $this->respondingTimeouts;
    }

    /**
     * @param RespondingTimeouts|null $respondingTimeouts
     */
    public function setRespondingTimeouts(?RespondingTimeouts $respondingTimeouts): void
    {
        $this->respondingTimeouts = $respondingTimeouts;
    }

    /**
     * @return LifeCycle|null
     */
    public function getLifeCycle(): ?LifeCycle
    {
        return $this->lifeCycle;
    }

    /**
     * @param LifeCycle|null $lifeCycle
     */
    public function setLifeCycle(?LifeCycle $lifeCycle): void
    {
        $this->lifeCycle = $lifeCycle;
    }

    /**
     * @return string|int
     */
    public function getKeepAliveMaxRequests(): string|int
    {
        return $this->keepAliveMaxRequests;
    }

    /**
     * @param string|int $keepAliveMaxRequests
     */
    public function setKeepAliveMaxRequests(string|int $keepAliveMaxRequests): void
    {
        $this->keepAliveMaxRequests = $keepAliveMaxRequests;
    }

    /**
     * @return string|int
     */
    public function getKeepAliveMaxTime(): string|int
    {
        return $this->keepAliveMaxTime;
    }

    /**
     * @param string|int $keepAliveMaxTime
     */
    public function setKeepAliveMaxTime(string|int $keepAliveMaxTime): void
    {
        $this->keepAliveMaxTime = $keepAliveMaxTime;
    }
}