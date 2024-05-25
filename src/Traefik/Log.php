<?php

namespace TraefikPhpSdk\Traefik;

use TraefikPhpSdk\Enums\LogLevelEnum;

class Log
{
    private string $filePath = '/var/log/traefik.log';

    private string $format = 'json';

    private LogLevelEnum $level = LogLevelEnum::ERROR;

    private bool $noColor = false;

    private int $maxSize = 100;

    private int $maxBackups = 3;

    private int $maxAge = 7;

    private int $compress = 0;

    public function __construct()
    {
        //
    }

    /**
     * @return int
     */
    public function getCompress(): int
    {
        return $this->compress;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @return LogLevelEnum
     */
    public function getLevel(): LogLevelEnum
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getMaxAge(): int
    {
        return $this->maxAge;
    }

    /**
     * @return int
     */
    public function getMaxBackups(): int
    {
        return $this->maxBackups;
    }

    /**
     * @return int
     */
    public function getMaxSize(): int
    {
        return $this->maxSize;
    }

    /**
     * @return bool
     */
    public function isNoColor(): bool
    {
        return $this->noColor;
    }

    /**
     * @param bool $noColor
     */
    public function setNoColor(bool $noColor): void
    {
        $this->noColor = $noColor;
    }

    /**
     * @param int $maxSize
     */
    public function setMaxSize(int $maxSize): void
    {
        $this->maxSize = $maxSize;
    }

    /**
     * @param int $maxBackups
     */
    public function setMaxBackups(int $maxBackups): void
    {
        $this->maxBackups = $maxBackups;
    }

    /**
     * @param int $maxAge
     */
    public function setMaxAge(int $maxAge): void
    {
        $this->maxAge = $maxAge;
    }

    /**
     * @param LogLevelEnum $level
     */
    public function setLevel(LogLevelEnum $level): void
    {
        $this->level = $level;
    }

    /**
     * @param string $format
     */
    public function setFormat(string $format): void
    {
        $this->format = $format;
    }

    /**
     * @param string $filePath
     */
    public function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
    }

    /**
     * @param int $compress
     */
    public function setCompress(int $compress): void
    {
        $this->compress = $compress;
    }

}