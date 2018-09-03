<?php

namespace ElusiveDocks\Router\Source\Route;

use ElusiveDocks\Router\Contract\RouteInterface;
use Symfony\Component\Routing\Route;

/**
 * Class GenericRoute
 * @package ElusiveDocks\Router\Source\Route
 */
class GenericRoute extends AbstractRoute implements RouteInterface
{
    /**
     * GenericRoute constructor.
     *
     * @param string $uriPath
     */
    public function __construct(string $uriPath = '/')
    {
        $this->setServiceProviderAdapter(
            new Route($uriPath)
        );
    }


}
