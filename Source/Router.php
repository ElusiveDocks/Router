<?php

namespace ElusiveDocks\Router\Source;

use ElusiveDocks\Router\Contract\CollectionInterface;
use ElusiveDocks\Router\Contract\RouteInterface;
use ElusiveDocks\Router\Source\Collection\GenericCollection;
use ElusiveDocks\Router\Source\Route\GenericRoute;
use ElusiveDocks\Router\Source\Router\GenericRouter;

/**
 * Class Router
 * @package ElusiveDocks\Router\Source
 */
class Router
{
    private static $Self = null;
    private static $Singleton = null;

    /**
     * @return CollectionInterface
     */
    public static function createCollection()
    {
        return new GenericCollection();
    }

    /**
     * @param string $uriPath
     * @return RouteInterface
     */
    public static function createRoute(string $uriPath = '/')
    {
        return new GenericRoute($uriPath);
    }

    /**
     * @return GenericRouter
     */
    private static function useSingleton()
    {
        if (self::$Singleton === null) {
            self::$Singleton = new GenericRouter();
        }
        return self::$Singleton;
    }

    /**
     * @return Router
     */
    private static function useSelf()
    {
        if (self::$Self === null) {
            self::$Self = new self;
        }
        return self::$Self;
    }
}
