<?php

namespace TraefikPhpSdk\Abstract;

class TcpRoute extends Route
{
    /**
     * @var int|null
     */
    private ?int $priority = null;

    /**
     * Rules are a set of matchers configured with values,
     * that determine if a particular request matches specific criteria.
     * If the rule is verified, the router becomes active, calls middlewares,
     * and then forwards the request to the service.
     *
     * @var string $rule
     */
    private string $rule = '';

    private $tls;

    /**
     * @param mixed $tls
     */
    public function setTls($tls): void
    {
        $this->tls = $tls;
    }

    /**
     * @return mixed
     */
    public function getTls()
    {
        return $this->tls;
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            [
                'priority' => $this->priority,
                'rule' => $this->rule,
                'tls' => $this->tls,
            ]
        );
    }
}