Yii PHP Framework Version 2 / NOX HttpSoapClient
================================================

Yii2 component for SOAP requests.

[![Latest Stable Version](https://poser.pugx.org/nox-it/yii2-nox-http-soap-client/v/stable)](https://packagist.org/packages/nox-it/yii2-nox-http-soap-client)
[![Total Downloads](https://poser.pugx.org/nox-it/yii2-nox-http-soap-client/downloads)](https://packagist.org/packages/nox-it/yii2-nox-http-soap-client)
[![Latest Unstable Version](https://poser.pugx.org/nox-it/yii2-nox-http-soap-client/v/unstable)](https://packagist.org/packages/nox-it/yii2-nox-http-soap-client)
[![License](https://poser.pugx.org/nox-it/yii2-nox-http-soap-client/license)](https://packagist.org/packages/nox-it/yii2-nox-http-soap-client)
[![Monthly Downloads](https://poser.pugx.org/nox-it/yii2-nox-http-soap-client/d/monthly)](https://packagist.org/packages/nox-it/yii2-nox-http-soap-client)
[![Daily Downloads](https://poser.pugx.org/nox-it/yii2-nox-http-soap-client/d/daily)](https://packagist.org/packages/nox-it/yii2-nox-http-soap-client)
[![composer.lock](https://poser.pugx.org/nox-it/yii2-nox-http-soap-client/composerlock)](https://packagist.org/packages/nox-it/yii2-nox-http-soap-client)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

* Either run

```bash
php composer.phar require --prefer-dist "nox-it/yii2-nox-http-soap-client" "*"
```

or add

```json
"nox-it/yii2-nox-http-soap-client": "*"
```

to the `require` section of your application's `composer.json` file.

## Usage

* Configure the `HttpSoapClient` component in your application's configuration file, for example:

```php
'components' => [
    'soapApi' => [
        'class'    => 'nox\http\soap\HttpSoapClient',
        'endpoint' => 'http://ws.exemple.com/WebService.asmx?wsdl',
        'options'  => [
            'cache_wsdl' => WSDL_CACHE_NONE
        ]
    ]
]
```

Or you can define the `HttpSoapClient` directly in your code:

```php
use nox\http\soap\HttpSoapClient;

$client = new HttpSoapClient(['endpoint' => 'http://ws.exemple.com/WebService.asmx?wsdl']);
```

After the configuration step is compleate, you can call the SOAP methods as follow (where `getMessage` is your SOAP method):

```php
echo $client->getMessage('Lorem ipsum...');
```

## License

**yii2-nox-http-soap-client** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)

