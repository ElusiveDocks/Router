<?php

namespace ElusiveDocks\Router\Event;

/**
 * Interface ResponseEvent
 * @package ElusiveDocks\Router\Event
 */
interface ResponseEvent
{
    const SEND = __CLASS__ . '.Send';
    const SEND_HEADER = __CLASS__ . '.Send.Header';
    const SEND_CONTENT = __CLASS__ . '.Send.Content';
}
