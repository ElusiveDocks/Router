<?php

namespace ElusiveDocks\Router\Source\Transfer;

use ElusiveDocks\Router\Contract\RequestInterface;
use ElusiveDocks\Router\Contract\ResponseInterface;
use ElusiveDocks\Router\Contract\TransferInterface;

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
        // TODO: Implement handle() method.

        return new GenericResponse();
    }
}
