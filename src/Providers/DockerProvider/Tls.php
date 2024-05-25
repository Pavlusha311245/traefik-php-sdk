<?php

namespace TraefikPhpSdk\Providers\DockerProvider;

class Tls
{

    /**
     * @var string|null The path to the certificate authority used for the secure connection to Docker, it defaults to the system bundle.
     */
    private ?string $ca = null;

    /**
     * @var string|null The path to the public certificate used for the secure connection to Docker. When using this option, setting the key option is required.
     */
    private ?string $cert = null;

    /**
     * @var string|null The path to the private key used for the secure connection to Docker. When using this option, setting the cert option is required.
     */
    private ?string $key = null;

    /**
     * @var bool If insecureSkipVerify is true, the TLS connection to Docker accepts any certificate presented by the server regardless of the hostnames it covers. Default is false
     */
    private bool $insecureSkipVerify = false;

    public function __construct()
    {
        //
    }
}