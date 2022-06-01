<?php

    namespace nyx\http\soap\exceptions;

    use Exception;

    /**
     * Class HttpSoapException
     *
     * @package nyx\soap
     */
    class HttpSoapException extends Exception
    {
        /**
         * @return string
         */
        public function getName()
        {
            return 'HttpSoapClient Exception.';
        }
    }
