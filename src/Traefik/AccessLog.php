<?php

namespace TraefikPhpSdk\Traefik;

class AccessLog
{
    private bool $addInternals = false;

    private string $filePath = '/var/log/traefik/access.log';

    private string $format = 'json';

    private int $bufferingSize = 100;
}