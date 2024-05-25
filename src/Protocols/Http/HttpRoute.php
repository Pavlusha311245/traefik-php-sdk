<?php

namespace TraefikPhpSdk\Protocols\Http;

use TraefikPhpSdk\Abstract\TcpRoute as TcpRouteAbstract;

/**
 * Class HttpRoute
 *
 * @package TraefikPhpSdk\Route
 *
 * @property string $rule
 * @property array $entrypoints
 * @property HttpService $service
 * @property string $name
 *
 * @method string getRule()
 * @method array getEntrypoints()
 * @method HttpService getService()
 * @method setRule(string $rule)
 * @method setEntrypoints(array $entrypoints)
 * @method setService(HttpService $service)
 * @method setName(string $name)
 * @method getName()
 */
class HttpRoute extends TcpRouteAbstract
{
    //
}