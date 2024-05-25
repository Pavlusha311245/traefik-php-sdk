<?php

namespace TraefikPhpSdk;

use TraefikPhpSdk\Traefik\{ForwardedHeaders, Http2, Http3, ProxyProtocol, Transport};

class Entrypoint
{
    /**
     * The ReusePort option enables EntryPoints from the same or different processes
     * listening on the same TCP/UDP port by utilizing the SO_REUSEPORT socket option.
     * It also allows the kernel to act like a load balancer to distribute incoming
     * connections between entry points.
     *
     * https://doc.traefik.io/traefik/routing/entrypoints/#reuseport
     *
     * @var bool $reusePort
     */
    private bool $reusePort = false;

    /**
     * The AsDefault option marks the EntryPoint to be in the list of default EntryPoints.
     * EntryPoints in this list are used (by default) on HTTP and TCP routers that do not define their own EntryPoints option.
     *
     * https://doc.traefik.io/traefik/routing/entrypoints/#asdefault
     *
     * @var bool $asDefault
     */
    private bool $asDefault = false;

    /**
     * @var Http2|null $http2
     */
    private ?Http2 $http2 = null;

    /**
     * @var Http3|null $http3
     */
    private ?Http3 $http3 = null;

    /**
     * @var ProxyProtocol|null $proxyProtocol
     */
    private ?ProxyProtocol $proxyProtocol = null;

    /**
     * @var ForwardedHeaders|null $forwardedHeaders
     */
    private ?ForwardedHeaders $forwardedHeaders = null;

    /**
     * @var Transport|null $transport
     */
    private ?Transport $transport = null;

    public function __construct(
        private string $name = '',
        private string $address = ''
    )
    {
        //
    }

    private function parseAddress(string $address)
    {
        $pattern = '/^([a-zA-Z0-9.-]+):(\d+)\/(tcp|udp)$/';

        return (bool)preg_match($pattern, $address);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return bool
     */
    public function isReusePort(): bool
    {
        return $this->reusePort;
    }

    /**
     * @return bool
     */
    public function isAsDefault(): bool
    {
        return $this->asDefault;
    }
}