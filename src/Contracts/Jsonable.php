<?php

namespace TraefikPhpSdk\Contracts;

interface Jsonable
{
    /**
     * Convert the object to JSON
     *
     * @param int $options
     * @return mixed
     */
    public function toJson(int $options = 0): string;
}
