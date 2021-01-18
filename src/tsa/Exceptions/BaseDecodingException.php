<?php


    namespace tsa\Exceptions;


    use Exception;
    use Throwable;

    class BaseDecodingException extends Exception
    {
        public function __construct($code = 0, Throwable $previous = null)
        {
            parent::__construct("The base32 data cannot be decoded", $code, $previous);
        }
    }