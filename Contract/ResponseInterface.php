<?php

namespace ElusiveDocks\Router\Contract;

/**
 * Interface ResponseInterface
 * @package ElusiveDocks\Router\Contract
 */
interface ResponseInterface
{
    /**
     * @return ResponseInterface
     */
    public function send(): ResponseInterface;
}
