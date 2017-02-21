<?php

    namespace nox\soap;

    /**
     * Class HttpSoapException
     *
     * @package nox\soap
     */
    class HttpSoapException extends \Exception
    {
        /**
         * @return string
         */
        public function getName()
        {
            return 'HttpSoapClient Exception.';
        }
    }
