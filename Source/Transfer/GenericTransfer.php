<?php

namespace ElusiveDocks\Router\Source\Transfer;

use ElusiveDocks\Dispatcher\Source\Dispatcher;
use ElusiveDocks\Router\Contract\RequestInterface;
use ElusiveDocks\Router\Contract\ResponseInterface;
use ElusiveDocks\Router\Contract\TransferInterface;
use ElusiveDocks\Router\Event\RouterEvent;

/**
 * Class GenericTransfer
 * @package ElusiveDocks\Router\Source\Transfer
 */
class GenericTransfer extends AbstractTransfer implements TransferInterface
{
    /**
     * @inheritDoc
     */
    public function handle(RequestInterface $request): ResponseInterface
    {
        Dispatcher::dispatchEvent(
            RouterEvent::HANDLE,
            Dispatcher::createEvent($this)
        );

        // TODO: Implement handle() method.

        return new GenericResponse();
    }
}
