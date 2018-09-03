<?php

namespace ElusiveDocks\Router\Source\Transfer;

use ElusiveDocks\Dispatcher\Source\Dispatcher;
use ElusiveDocks\Router\Contract\RequestInterface;
use ElusiveDocks\Router\Event\RequestEvent;
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
        Dispatcher::dispatchEvent(
            RequestEvent::CAPTURE
        );

        $this->setServiceProviderAdapter(Request::createFromGlobals());
        return $this;
    }

}
