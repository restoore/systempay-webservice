# Use Systempay payment webservice for Laravel 5.x

![Package](https://img.shields.io/badge/Package-restoore%2Fsystempay-webservice-lightgrey.svg)
![Laravel](https://img.shields.io/badge/For-Laravel%20%E2%89%A5%205.4-yellow.svg)
![Release](https://img.shields.io/github/release/restoore/systempay-webservice.svg)
![Packagist](https://img.shields.io/packagist/v/restoore/systempay-webservice.svg)
![MIT License](https://img.shields.io/github/license/restoore/systempay-webservice.svg)

## What is the point ?
The library provides an easy and fast systempay webservice package. 
Web services are used to include one or several payment functions into an integrated CMS.

Common transaction operations :
  * Creating payments (without 3D Secure authentication).
  * Automating transaction actions (refund, cancel, etc.).
  
To enable this option, the merchant must subscribe to the option of payment by web services.

Web services are developed according to the version 1.2 of the SOAP protocol (Simple Object Access
Protocol) and are described by the following wsdl file:
[https://paiement.systempay.fr/vads-ws/v5?wsdl](https://paiement.systempay.fr/vads-ws/v5?wsdl)

Don't forget to read : [Systempay Webservice v5 documentation](https://paiement.systempay.fr/html/Doc/webservices/en/Technical_Implementation_Guide_Webservice_V5_Systempay_v1.5.pdf)


## Installation
First you need to add the component to your composer.json
```
composer require restoore/systempay-webservice
```
Update your packages with *composer update* or install with *composer install*.

After updating composer, add the ServiceProvider to the providers array in config/app.php

#### For Laravel >= 5.1
```php
  'providers' => [
      ...
      Restoore\SystempayWebservice\SystempayWebserviceServiceProvider::class,
  ]
```

#### For Laravel 5.0
```php
  'providers' => [
      ...
      Restoore\SystempayWebservice\SystempayWebserviceServiceProvider,
  ]
```

#### Facades
```php
'SystempayWebservice' => Restoore\SystempayWebservice\Facades\SystempayWebservice::class
```

## Configuration
You can execute this command from your laravel project root directory to copy config file in your config directory :
```
php artisan vendor:publish --provider="Restoore\SystempayWebservice\SystempayWebserviceServiceProvider" --tag="config"
```
By default, the package comes with an example configuration file : config/systempay_webservice.php
```php
return [
    'shopid' => 'YOUR_SHOPID'
    'key' => 'YOUR_KEY',
    'env' => 'PRODUCTION',
    //Systempay's url
    'url_wsdl' => 'https://paiement.systempay.fr/vads-ws/v5?wsdl',
    'ns' => 'http://v5.ws.vads.lyra.com/Header/'

];
```
In this file, you have to put your *key* and *shopid*. This parameters are given by Systempay.

### Test environment
If you are running your app in a test environment, you can override *key*, *shopid* and *env* parameters using .env file

Use this following constants names : SYSTEMPAYWEBSERVICE_SHOPID, SYSTEMPAYWEBSERVICE_CERTIFICATE and SYSTEMPAYWEBSERVICE_MODE

## Unit tests
You can execute this command from your laravel project root directory to copy test file in your tests directory :
```
php artisan vendor:publish --provider="Restoore\SystempayWebservice\SystempayWebserviceServiceProvider" --tag="tests"
```

After that, simply execute phpunit command to launch unit tests. Please make sure to have the last phpunit version installed. At this moment, the last version is 5.7.14. 
```
flo@ubuntu:/var/www/systempayws$ phpunit tests/SystempayWebserviceTest.php
PHPUnit 5.7.14 by Sebastian Bergmann and contributors.
.....                                                               5 / 5 (100%)
Time: 4.9 seconds, Memory: 15.50MB
OK (5 tests, 8 assertions)
```

Test will create a transaction, get uuid, return all the transaction details, update and cancel the transaction.

## Create a payment request
Now we are finally ready to use the package! Here is a little example of code to explain how does it work
```php
    $commonRequest = [
        'paymentSource' => 'CC',
        'submissionDate' => $submissionDate
    ];
    $threeDSRequest = [
        'mode' => "DISABLED"
    ];
    $paymentRequest = [
        'amount' => "2990",
        'currency' => "978",
        'manualValidation' => '0'
    ];
    $orderRequest = [
        'orderId' => "TEST004",
        'extInfo' => [
            'key' => 'Numéro adhérent',
            'value' => '00000001'
        ]
    ];
    $cardRequest = [
        'number' => "4970100000000000",
        'scheme' => "VISA",
        'expiryMonth' => "12",
        'expiryYear' => "2023",
        'cardSecurityCode' => "123",
        //'cardHolderBirthDay' => "2008-12-31" => require to complete paymentOptionCode if you want to update the transaction
    ];
    //create a transaction
    if(SystempayWebservice::createPayment($commonRequest, $threeDSRequest, $paymentRequest, $orderRequest, $cardRequest) === true)
        SystempayWebservice::getResult(); // get last result
    } else {
        SystempayWebservice::getLastError(); // get last error
    }
```

#### What you have to know about this code
1. CreatePayment can takes a lot of parameters so i use arrays for this function
2. This function return a boolean
3. If true you can have the complete result otherwise you can see error message

## List of availables functions

###Important thing to know
For each functions you can call Systempay::getResult() or Systempay::getLastError(). So you have access to the complete return object from systempay webservice. Please refer to the documentation to have the complete structure. 

### getPaymentUuid
Get an uuid (Universally Unique IDentifier) for a transaction from transactionId, creationDate and sequenceNumber
#### Parameters
* string transactionId
* string creationDate
* int sequenceNumber, defaut value : 1

#### Return
* uuid string

#### Exemple
```php
    $uuid = SystempayWebservice::getPaymentUuid($transactionId, $submissionDate);
```

### findPayments
The findPayments operation allows to search for payments.
findPayments allows to obtain a list of payments according to the search criteria.
At the moment, the paymentToken, subscriptionId and uuid attributes are not taken into account for this operation.
#### Parameter
* string orderId

#### Return
* boolean - true if action successfully completed, false otherwise

#### Exemple
```php
    if(SystempayWebservice::findPayments('PHPUnitTest') === true){
        foreach(SystempayWebservice::getResult()->transactionItem as $transaction){
            //do something smart    
        }
    }
    ...
```

### getPaymentDetails
The getPaymentDetails operation allows to request the results for the payment outcome to see its attributes.
#### Parameter
* string uuid

#### Return
* boolean - true if action successfully completed, false otherwise

#### Exemple
```php
    if(SystempayWebservice::getPaymentDetails('589f5c2b0b954e3aa802aaa8a22fb17d') === true){
        echo "the transaction amout is " . SystempayWebservice::getResult()->paymentResponse->amount;
    }
    ...
```

### updatePayment
updatePayment allows to:
* edit the transaction amount (downward),
* edit the desired capture date,
* To be updated, transactions must have one of the following statuses:
* To be validated
* To be validated and authorized

Waiting for authorization :
* Waiting for capture.

Note: if no detail is edited, an error code will appear and the query will be rejected.
#### Parameters
* string uuid
* string amount
* string <optionnal> expectedCaptureDate
* int currency
* int <optionnal> manualValidation - 0|1
* string <optionnal> comment
* int <optionnal> paymentOptionCode

#### Return
* boolean - true if action successfully completed, false otherwise

#### Exemple
```php
    $result = SystempayWebservice::updatePayment($uuid, '2590',date('Y-m-d\TH:i:s\Z', time() + 3600 * 24) ,978,0,'Here is my comment !');
    if($result === true){
        echo "the new transaction amout is " . SystempayWebservice::getResult()->paymentResponse->amount;
    }
    ...
```

### validatePayment
The validatePayment operation allows to authorize transaction capture in the bank on the date specified in the original payment.
To be validated, transactions must have one of the following statuses:
* To be validated
* To be validated and authorized
#### Parameters
* string uuid
* string <optionnal> comment

#### Return
* boolean - true if action successfully completed, false otherwise

#### Exemple
```php
    if(SystempayWebservice::validatePayment('589f5c2b0b954e3aa802aaa8a22fb17d') === true){
        echo "the transaction is validated";
    }
    ...
```

### createPayment
The call to the createPayment operation allows to initialize a payment transaction.

Depending on the attribute values in the query, it is possible to make:
* immediate payments,
* deferred payments,
* payments without 3D Secure authentication,
* payments using an existing token
Note : 3DS is not implemented yet in this package
#### Parameters
* array commonRequestParams
* array <optionnal> threeDSRequestParams
* array paymentRequestParams
* array orderRequestParams
* array cardRequestParams
* array <optionnal> customerRequestParams
* array <optionnal> techRequestParams
* array <optionnal> shoppingCartRequestParams

For all parameters details you can refer to manual : [Systempay Webservice v5 documentation](https://paiement.systempay.fr/html/Doc/webservices/en/Technical_Implementation_Guide_Webservice_V5_Systempay_v1.5.pdf) 
#### Return
* boolean - true if action successfully completed, false otherwise

### refundPayment
The refundPayment operation allows to refund a buyer.
The transactions subject to refund have the Captured status.
#### Parameters
* string uuid
* string amount
* string <optionnal> expectedCaptureDate
* int currency
* int <optionnal> manualValidation - 0|1
* string <optionnal> comment

#### Return
* boolean - true if action successfully completed, false otherwise

#### Exemple
```php
    SystempayWebservice::refundPayment('0de9251b645e42bda30f1397a9ad6e32', 1500, null, 978, 0, 'Here my refund comment !');
    ...
```

### cancelPayment
The cancelPayment operation allows to cancel a payment transaction.
cancelPayment allows to definitively cancel a not-yet-captured transaction with one of the following statuses:
* To be validated
* To be validated and authorized
* Waiting for authorization.
* Waiting for capture.

#### Parameters
* string uuid
* string <optionnal> comment

#### Return
* boolean - true if action successfully completed, false otherwise

#### Exemple
```php
    SystempayWebservice::cancelPayment($uuid, 'Here my cancel comment !');
    ...
```
