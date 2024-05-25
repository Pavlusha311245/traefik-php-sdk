<?php

namespace TraefikPhpSdk\Abstract;

use TraefikPhpSdk\Contracts\Arrayable;

abstract class Service implements Arrayable
{
    private ?LoadBalancer $loadBalancer = null;

    public function __construct(
        private string $name
    )
    {
        //
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getLoadBalancer()
    {
        return $this->loadBalancer;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $loadBalancer
     */
    public function setLoadBalancer(LoadBalancer $loadBalancer): void
    {
        $this->loadBalancer = $loadBalancer;
    }

    public function toArray(): array
    {
        $data = [];

        if (!empty($this->loadBalancer)) {
            $data['loadBalancer'] = $this->loadBalancer->toArray();
        }

        return $data;
    }
}