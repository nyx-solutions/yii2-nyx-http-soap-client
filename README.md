Yii PHP Framework Version 2 / NYX HttpSoapClient
================================================

Yii2 component for SOAP requests.

[![Latest Stable Version](https://poser.pugx.org/nyx-solutions/yii2-http-soap-client/v/stable)](https://packagist.org/packages/nyx-solutions/yii2-http-soap-client)
[![Total Downloads](https://poser.pugx.org/nyx-solutions/yii2-http-soap-client/downloads)](https://packagist.org/packages/nyx-solutions/yii2-http-soap-client)
[![Latest Unstable Version](https://poser.pugx.org/nyx-solutions/yii2-http-soap-client/v/unstable)](https://packagist.org/packages/nyx-solutions/yii2-http-soap-client)
[![License](https://poser.pugx.org/nyx-solutions/yii2-http-soap-client/license)](https://packagist.org/packages/nyx-solutions/yii2-http-soap-client)
[![Monthly Downloads](https://poser.pugx.org/nyx-solutions/yii2-http-soap-client/d/monthly)](https://packagist.org/packages/nyx-solutions/yii2-http-soap-client)
[![Daily Downloads](https://poser.pugx.org/nyx-solutions/yii2-http-soap-client/d/daily)](https://packagist.org/packages/nyx-solutions/yii2-http-soap-client)
[![composer.lock](https://poser.pugx.org/nyx-solutions/yii2-http-soap-client/composerlock)](https://packagist.org/packages/nyx-solutions/yii2-http-soap-client)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

* Either run

```bash
php composer.phar require --prefer-dist "nyx-solutions/yii2-http-soap-client" "*"
```

or add

```json
"nyx-solutions/yii2-http-soap-client": "*"
```

to the `require` section of your application's `composer.json` file.

## Usage

* Configure the `HttpSoapClient` component in your application's configuration file, for example:

```php
'components' => [
    'soapApi' => [
        'class'    => 'nyx\http\soap\HttpSoapClient',
        'endpoint' => 'http://ws.exemple.com/WebService.asmx?wsdl',
        'options'  => [
            'cache_wsdl' => WSDL_CACHE_NONE
        ]
    ]
]
```

Or you can define the `HttpSoapClient` directly in your code:

```php
use nyx\http\soap\HttpSoapClient;

$client = new HttpSoapClient(['endpoint' => 'http://ws.exemple.com/WebService.asmx?wsdl']);
```

After the configuration step is compleate, you can call the SOAP methods as follow (where `getMessage` is your SOAP method):

```php
echo $client->getMessage('Lorem ipsum...');
```

## License

**yii2-http-soap-client** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)

