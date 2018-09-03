<?php

namespace ElusiveDocks\Router\Exception;

use ElusiveDocks\Router\Contract\ExceptionInterface;

/**
 * Class AbstractException
 * @package ElusiveDocks\Router\Exception
 */
abstract class AbstractException extends \Exception implements ExceptionInterface
{
    /**
     * @return string
     */
    public function __toString()
    {
        return parent::__toString();
    }
}
