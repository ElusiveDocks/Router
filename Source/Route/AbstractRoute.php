<?php

namespace ElusiveDocks\Router\Source\Route;

use ElusiveDocks\Router\Contract\RouteInterface;
use Symfony\Component\Routing\Route;

/**
 * Class AbstractRoute
 * @package ElusiveDocks\Router\Source\Route
 */
abstract class AbstractRoute implements RouteInterface
{
    /** @var null|Route $ServiceProviderAdapter */
    private $ServiceProviderAdapter = null;

    /**
     * @return null|Route
     */
    public function getServiceProviderAdapter(): ?Route
    {
        return $this->ServiceProviderAdapter;
    }

    /**
     * @param null|Route $ServiceProviderAdapter
     * @return AbstractRoute
     */
    public function setServiceProviderAdapter(?Route $ServiceProviderAdapter): AbstractRoute
    {
        $this->ServiceProviderAdapter = $ServiceProviderAdapter;
        return $this;
    }
}
