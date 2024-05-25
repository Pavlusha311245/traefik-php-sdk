<?php

namespace TraefikPhpSdk;

/**
 * Class ServersTransport
 *
 * ServersTransport allows to configure the transport between Traefik and your servers.
 */
class ServersTransport
{
    private string $serverName;

    private $certificates;

    private bool $insecureSkipVerify;

    private $rootCAs;

    private int $maxIdleConnsPerHost = 2;

    private bool $disableHTTP2 = false;

    private string $peerCertURI = '';

    private string $forwardingTimeouts = '30s';

}