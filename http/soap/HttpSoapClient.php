<?php

    namespace nyx\http\soap;

    use Exception;
    use nyx\http\soap\exceptions\HttpSoapException;
    use SoapClient;
    use SoapFault;
    use yii\base\Component;
    use yii\base\InvalidConfigException;

    /**
     * Class HttpSoapClient
     *
     * @package nyx\soap
     */
    class HttpSoapClient extends Component
    {
        /**
         * @var string
         */
        public string $endpoint = '';

        /**
         * @var array the array of SOAP client options.
         */
        public array $options = [];

        /**
         * @var SoapClient the SOAP client instance.
         */
        private ?SoapClient $_soapClient = null;

        /**
         * @inheritdoc
         *
         * @throws InvalidConfigException|HttpSoapException
         */
        public function init()
        {
            parent::init();

            if (is_null($this->endpoint) || empty($this->endpoint) || !filter_var($this->endpoint, FILTER_VALIDATE_URL)) {
                throw new InvalidConfigException('The Endpoint URL property must be set.');
            }

            try {
                $this->_soapClient = new SoapClient($this->endpoint, $this->options);
            } catch (SoapFault $exception) {
                throw new HttpSoapException($exception->getMessage(), (int)$exception->getCode(), $exception);
            }
        }

        /**
         * @param string $name
         * @param array  $arguments
         *
         * @return mixed
         *
         * @throws Exception
         * @noinspection PhpRedundantCatchClauseInspection
         */
        public function __call($name, $arguments)
        {
            try {
                return call_user_func_array([$this->_soapClient, $name], $arguments);
            } catch (SoapFault $exception) {
                throw new HttpSoapException($exception->getMessage(), (int)$exception->getCode(), $exception);
            }
        }
    }
