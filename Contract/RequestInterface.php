<?php

namespace ElusiveDocks\Router\Contract;

/**
 * Interface RequestInterface
 * @package ElusiveDocks\Router\Contract
 */
interface RequestInterface
{
    /**
     * @return RequestInterface
     */
    public function capture(): RequestInterface;
}
