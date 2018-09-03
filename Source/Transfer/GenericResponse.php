<?php

namespace ElusiveDocks\Router\Source\Transfer;

use ElusiveDocks\Router\Contract\ResponseInterface;
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
        // TODO: Implement sendContent() method.
        var_dump(__METHOD__);
    }
}
