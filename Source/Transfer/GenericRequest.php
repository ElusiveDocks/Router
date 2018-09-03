<?php

namespace ElusiveDocks\Router\Source\Transfer;

use ElusiveDocks\Router\Contract\RequestInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class GenericRequest
 * @package ElusiveDocks\Router\Source\Transfer
 */
class GenericRequest extends AbstractRequest implements RequestInterface
{
    /**
     * @inheritDoc
     */
    public function capture(): RequestInterface
    {
        $this->setServiceProviderAdapter(Request::createFromGlobals());
        return $this;
    }

}
