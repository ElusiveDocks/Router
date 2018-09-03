<?php

namespace ElusiveDocks\Router\Source\Collection;

use ElusiveDocks\Router\Contract\CollectionInterface;
use Symfony\Component\Routing\RouteCollection;

/**
 * Class AbstractCollection
 * @package ElusiveDocks\Router\Source\Collection
 */
abstract class AbstractCollection implements CollectionInterface
{
    /** @var null|RouteCollection $ServiceProviderAdapter */
    private $ServiceProviderAdapter = null;

    /**
     * @return null|RouteCollection
     */
    public function getServiceProviderAdapter(): ?RouteCollection
    {
        return $this->ServiceProviderAdapter;
    }

    /**
     * @param null|RouteCollection $ServiceProviderAdapter
     * @return AbstractCollection
     */
    public function setServiceProviderAdapter(?RouteCollection $ServiceProviderAdapter): AbstractCollection
    {
        $this->ServiceProviderAdapter = $ServiceProviderAdapter;
        return $this;
    }
}
