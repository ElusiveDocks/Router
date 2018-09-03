<?php

namespace ElusiveDocks\Router\Contract;

/**
 * Interface TransferInterface
 * @package ElusiveDocks\Router\Contract
 */
interface TransferInterface
{
    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function handle(RequestInterface $request): ResponseInterface;
}
