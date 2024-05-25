<?php

namespace TraefikPhpSdk\Providers;

use TraefikPhpSdk\Enums\FileProviderTypeEnum;

class FileProvider
{
    public const string PROVIDER = 'file';

    public function __construct(
        private FileProviderTypeEnum $type = FileProviderTypeEnum::DIRECTORY,
        private bool $watch = false
    )
    {
        //
    }

    /**
     * @param FileProviderTypeEnum $type
     */
    public function setType(FileProviderTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @param bool $watch
     */
    public function setWatch(bool $watch): void
    {
        $this->watch = $watch;
    }

    public function getType(): FileProviderTypeEnum
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isWatch(): bool
    {
        return $this->watch;
    }
}