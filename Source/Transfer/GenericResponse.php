<?php

namespace ElusiveDocks\Router\Source\Transfer;

use ElusiveDocks\Dispatcher\Source\Dispatcher;
use ElusiveDocks\Router\Contract\ResponseInterface;
use ElusiveDocks\Router\Event\RouterEvent;
use ElusiveDocks\Router\Exception\GenericException;

/**
 * Class GenericResponse
 * @package ElusiveDocks\Router\Source\Transfer
 */
class GenericResponse extends AbstractResponse implements ResponseInterface
{
    use StatusTrait;

    /**
     * @inheritDoc
     * @throws GenericException
     */
    public function send(): ResponseInterface
    {
        Dispatcher::dispatchEvent(
            RouterEvent::SEND,
            Dispatcher::createEvent($this)
        );

        $this->sendHeaders();
        $this->sendContent();
        return $this;
    }

    /**
     * @return ResponseInterface
     * @throws GenericException
     */
    private function sendHeaders(): ResponseInterface
    {
        Dispatcher::dispatchEvent(
            RouterEvent::SEND_HEADER,
            Dispatcher::createEvent($this)
        );

        if ($this->isHeaderAvailable()) {
            // TODO: Implement sendHeaders() method.
            $this->sendStatus(404);
        }
        return $this;
    }

    /**
     * @return bool
     */
    private function isHeaderAvailable()
    {
        if (headers_sent()) {
            return false;
        }
        return true;
    }

    /**
     * @param int $code
     * @param string $version 1.1
     * @throws GenericException
     */
    private function sendStatus(int $code, string $version = '1.1')
    {
        header(
            sprintf(
                'HTTP/%s %s %s',
                $version,
                $this->getStatusCode($code),
                $this->getStatusText($code)
            ),
            true, $code
        );
    }

    private function sendContent()
    {
        Dispatcher::dispatchEvent(
            RouterEvent::SEND_CONTENT,
            Dispatcher::createEvent($this)
        );

        // TODO: Implement sendContent() method.
        var_dump(__METHOD__);
    }
}
