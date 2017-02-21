<?php

    namespace nox\soap;

    /**
     * Class SoapException
     *
     * @package nox\soap
     */
    class SoapException extends \Exception
    {
        /**
         * @return string
         */
        public function getName()
        {
            return 'SOAP Client Exception.';
        }
    }
