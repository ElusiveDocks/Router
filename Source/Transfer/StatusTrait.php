<?php

namespace ElusiveDocks\Router\Source\Transfer;

use ElusiveDocks\Router\Exception\GenericException;

/**
 * Trait StatusTrait
 * @package ElusiveDocks\Router\Source\Transfer
 */
trait StatusTrait
{
    /** @var array $statusCode */
    private $statusCode = [
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        103 => 'Early Hints',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        208 => 'Already Reported',
        226 => 'IM Used',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Payload Too Large',
        414 => 'URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        421 => 'Misdirected Request',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        425 => 'Reserved for WebDAV advanced collections expired proposal',
        426 => 'Upgrade Required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        451 => 'Unavailable For Legal Reasons',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
        510 => 'Not Extended',
        511 => 'Network Authentication Required'
    ];

    /**
     * @param int $code Status code
     * @return string Status code
     * @throws GenericException
     */
    public function getStatusCode(int $code): string
    {
        if ($this->isStatusAvailable($code)) {
            return (string)$code;
        }
        throw new GenericException();
    }

    /**
     * @param int $code
     * @return bool
     * @throws GenericException
     */
    private function isStatusAvailable(int $code): bool
    {
        if (array_key_exists($code, $this->statusCode)) {
            return true;
        } else {
            throw new GenericException('Status not implemented');
        }
    }

    /**
     * @param int $code Status code
     * @return string Status text
     * @throws GenericException
     */
    public function getStatusText(int $code): string
    {
        if ($this->isStatusAvailable($code)) {
            return (string)$this->statusCode[$code];
        }
        throw new GenericException();
    }
}
