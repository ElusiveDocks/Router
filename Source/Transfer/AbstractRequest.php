<?php

namespace ElusiveDocks\Router\Source\Transfer;

use ElusiveDocks\Router\Contract\RequestInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AbstractRequest
 * @package ElusiveDocks\Router\Source\Transfer
 */
abstract class AbstractRequest implements RequestInterface
{
    /** @var null|Request $ServiceProviderAdapter */
    private $ServiceProviderAdapter = null;

    /**
     * @return null|Request
     */
    public function getServiceProviderAdapter(): ?Request
    {
        return $this->ServiceProviderAdapter;
    }

    /**
     * @param null|Request $ServiceProviderAdapter
     * @return AbstractRequest
     */
    public function setServiceProviderAdapter(?Request $ServiceProviderAdapter): AbstractRequest
    {
        $this->ServiceProviderAdapter = $ServiceProviderAdapter;
        return $this;
    }
}
