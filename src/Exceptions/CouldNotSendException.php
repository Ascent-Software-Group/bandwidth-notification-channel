<?php

namespace NotificationChannels\Bandwidth\Exceptions;

use Exception;
use Throwable;

class CouldNotSendException extends Exception
{
    /**
     * @param  Throwable  $exception
     *
     * @return self
     */
    public static function clientError(Throwable $exception)
    {
        return new static(
            $exception->getMessage(),
            $exception->getCode(),
            $exception
        );
    }
}
