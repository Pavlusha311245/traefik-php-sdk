<?php

namespace TraefikPhpSdk\Enums;

enum ProtocolTypeEnum: string
{
    case HTTP = 'http';

    case TCP = 'tcp';

    case UDP = 'udp';

    public function toArray(): array
    {
        return [
            'http' => self::HTTP,
            'tcp' => self::TCP,
            'udp' => self::UDP,
        ];
    }
}
