<?php
/**
 * File - SystempayWebservice.php
 * Date 22/02/2017
 * Time 15:00
 * @author restoore - https://github.com/restoore/
 * @version 1.0
 */


namespace Restoore\SystempayWebservice;

require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Support\Facades\Config;
use DOMDocument;
use DOMXPath;

use Restoore\SystempayWebservice\Services\Cancel;
use Restoore\SystempayWebservice\Services\Create;
use Restoore\SystempayWebservice\Services\Refund;
use Restoore\SystempayWebservice\Services\Update;
use Restoore\SystempayWebservice\Services\Find;
use Restoore\SystempayWebservice\Services\Validate;
use Restoore\SystempayWebservice\Services\Get;

use Restoore\SystempayWebservice\StructType\BillingDetailsRequest;
use Restoore\SystempayWebservice\StructType\CancelPayment;
use Restoore\SystempayWebservice\StructType\CommonRequest;
use Restoore\SystempayWebservice\StructType\CustomerRequest;
use Restoore\SystempayWebservice\StructType\ExtraDetailsRequest;
use Restoore\SystempayWebservice\StructType\FindPayments;
use Restoore\SystempayWebservice\StructType\GetPaymentUuid;
use Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest;
use Restoore\SystempayWebservice\StructType\OrderRequest;
use Restoore\SystempayWebservice\StructType\PaymentRequest;
use Restoore\SystempayWebservice\StructType\RefundPayment;
use Restoore\SystempayWebservice\StructType\ShippingDetailsRequest;
use Restoore\SystempayWebservice\StructType\ShoppingCartRequest;
use Restoore\SystempayWebservice\StructType\TechRequest;
use Restoore\SystempayWebservice\StructType\ThreeDSRequest;
use Restoore\SystempayWebservice\StructType\UpdatePayment;
use Restoore\SystempayWebservice\StructType\QueryRequest;
use Restoore\SystempayWebservice\StructType\CardRequest;
use Restoore\SystempayWebservice\StructType\CreatePayment;
use Restoore\SystempayWebservice\StructType\GetPaymentDetails;

class SystempayWebservice
{
    public $options;
    private static $serviceClient;
    private $lastError;
    private $result;

    public function __construct()
    {
        $this->options = [
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => Config::get("systempay_webservice.url_wsdl"),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Restoore\SystempayWebservice\ClassMap::get(),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CACHE_WSDL => 0
        ];
    }

    /**
     * Return current service client. Class extends soap client
     * @return mixed
     */
    public function getServiceClient()
    {
        return self::$serviceClient;
    }

    /**
     * Save current service client. Class extends soap client
     * @param object $ServiceClient
     */
    public function setServiceClient($ServiceClient)
    {
        self::$serviceClient = $ServiceClient;
        $this->setSoapHeaders();
    }

    /**
     * Return last error
     * @return mixed
     */
    public function getLastError()
    {
        return $this->lastError;
    }

    /**
     * Save last error
     * @param mixed $lastError
     */
    public function setLastError($lastError)
    {
        $this->lastError = $lastError;
        return $this;
    }

    /**
     * Return request result
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Save request result
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Build AuthToken with requestId and timespam
     * I've used generic parameters because order differ between request and response calls
     * @param string $param1
     * @param string $param2
     * @return string - token generated
     */
    public function createAuthToken($param1, $param2)
    {
        return base64_encode(hash_hmac('sha256', $param1 . $param2, env('SYSTEMPAYWEBSERVICE_CERTIFICATE',
            Config::get("systempay_webservice.certificate")), true));
    }

    /**
     * Checks if token is the same between request sent and answer
     * Checks in commonResponse if response code = 0
     * @param object $result
     * @return bool
     */
    public function hasError($result)
    {
        //check return token
        if ($this->checkToken() === false) {
            $this->setLastError("attempted fraud detected");
            return true;
        }
        //check response status
        $responseCode = $result->commonResponse->responseCode;
        if ($responseCode !== 0) {
            $this->setLastError("Error code : {$responseCode} - {$result->commonResponse->responseCodeDetail}");
            return true;
        }
        return false;
    }

    /**
     * Generate unique id for a webservice call
     * @return string
     */
    public static function genUuid()
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    /**
     * Not used yet, will be use for 3DS
     * @param $client
     * @return mixed
     */
    public function setJsessionId()
    {
        $cookie = $_SESSION['JSESSIONID'];
        $this->__setCookie('JSESSIONID', $cookie);
        return $cookie;
    }

    /**
     * Not used yet, will be use for 3DS
     * @return string
     */
    public function getJsessionId()
    {
        //get headers of the answer
        $header = ($this->__getLastResponseHeaders());
        if (!preg_match('#JSESSIONID=([A-Za-z0-9\._]+)#', $header, $matches)) {
            return "Not sessions id detected";
        }
        $jsessionId = $matches[1];
        $_SESSION['JSESSIONID'] = $jsessionId;
        return $jsessionId;
    }

    /**
     * Add soap headers to validate webservice call
     */
    public function setSoapHeaders()
    {
        //create values to add to headers
        $ns = Config::get("systempay_webservice.ns");
        $shopId = env('SYSTEMPAYWEBSERVICE_SHOPID', Config::get("systempay_webservice.shopid"));;
        $requestId = self::genUuid();
        $timestamp = gmdate('Y-m-d\TH:i:s\Z');
        $mode = env('SYSTEMPAYWEBSERVICE_MODE', Config::get("systempay_webservice.mode"));
        $authToken = $this->createAuthToken($requestId,$timestamp);

        //Create headers shopId, requestId, timestamp, mode & authToken
        self::getServiceClient()->setSoapHeader($ns, 'shopId', $shopId);
        self::getServiceClient()->setSoapHeader($ns, 'requestId', $requestId);
        self::getServiceClient()->setSoapHeader($ns, 'timestamp', $timestamp);
        self::getServiceClient()->setSoapHeader($ns, 'mode', $mode);
        self::getServiceClient()->setSoapHeader($ns, 'authToken', $authToken);
    }

    /**
     * Get Soap headers
     * @return array - Soap headers
     */
    public function getSoapHeaders()
    {
        $dom = new DOMDocument;
        $dom->loadXML(self::getServiceClient()->getLastResponse(), LIBXML_NOWARNING);
        $path = new DOMXPath($dom);
        $headers = $path->query('//*[local-name()="Header"]/*');
        $responseHeader = array();
        foreach ($headers as $headerItem) {
            $responseHeader[$headerItem->nodeName] = $headerItem->nodeValue;
        }
        return $responseHeader;
    }

    /**
     * Check if return token is correct otherwise, we have an eventual fraud
     * @return bool
     */
    public function checkToken()
    {
        $soapHeaders = $this->getSoapHeaders();
        $responseAuthToken = $this->createAuthToken($soapHeaders['timestamp'] ,$soapHeaders['requestId']);
        return $responseAuthToken === $this->getSoapHeaders()['authToken'];
    }

    /**
     * Get an uuid (Universally Unique IDentifier) for a transaction from transactionId, creationDate and sequenceNumber
     * @param string $transactionId
     * @param string $creationDate
     * @param int $sequenceNumber
     * @return bool
     */
    public function getPaymentUuid($transactionId, $creationDate, $sequenceNumber = 1)
    {
        // construct new service client
        self::setServiceClient(new Get($this->options));

        $legacyTransactionKeyRequest = new LegacyTransactionKeyRequest();
        $legacyTransactionKeyRequest->setTransactionId($transactionId)
            ->setCreationDate($creationDate)
            ->setSequenceNumber($sequenceNumber);

        //check if there are soap faults
        if (self::getServiceClient()->getPaymentUuid(new GetPaymentUuid($legacyTransactionKeyRequest)) !== false) {
            $this->setResult(self::getServiceClient()->getResult()->legacyTransactionKeyResult);
            if (!$this->hasError($this->getResult())) {
                return $this->getResult()->paymentResponse->transactionUuid;
            }
        } else {
            $this->setLastError(self::getServiceClient()->getLastError());
            return false;
        }
    }

    /**
     * The findPayments operation allows to search for payments.
     * findPayments allows to obtain a list of payments according to the search criteria.
     * At the moment, the paymentToken, subscriptionId and uuid attributes are not taken into account for this operation.
     * @param string $orderId
     * @return mixed findPaymentsResult object soap call is a success | bool false otherwise
     */
    public function findPayments($orderId)
    {
        // construct new service client
        self::setServiceClient(new Find($this->options));

        $queryRequest = new QueryRequest();
        $queryRequest->setOrderId($orderId);

        //check if there are soap faults
        if (self::getServiceClient()->findPayments(new FindPayments($queryRequest)) !== false) {
            $this->setResult(self::getServiceClient()->getResult()->findPaymentsResult);
            if (!$this->hasError($this->getResult())) {
                return $this->getResult();
            }
        } else {
            $this->setLastError(self::getServiceClient()->getLastError());
            return false;
        }
    }

    /**
     * The getPaymentDetails operation allows to request the results for the payment outcome to see its attributes.
     * @param string $uuid
     * @return bool
     */
    public function getPaymentDetails($uuid){
        // construct new service client
        self::setServiceClient(new Get($this->options));

        $queryRequest = new QueryRequest();
        $queryRequest->setUuid($uuid);

        if (self::getServiceClient()->getPaymentDetails(new GetPaymentDetails($queryRequest)) !== false) {
            $this->setResult(self::getServiceClient()->getResult()->getPaymentDetailsResult);
            return !$this->hasError($this->getResult());
        } else {
            $this->setLastError(self::getServiceClient()->getLastError());
            return false;
        }
    }

    /**
     * The validatePayment operation allows to authorize transaction capture in the bank on the date specified
     * in the original payment.
     * To be validated, transactions must have one of the following statuses:
     *  - To be validated
     *  - To be validated and authorized
     * @param string $uuid
     * @param string <optionnal> $comment
     * @return bool
     */
    public function validatePayment($uuid, $comment = NULL)
    {
        // construct new service client
        self::setServiceClient(new Validate($this->options));

        $queryRequest = new QueryRequest();
        $queryRequest->setUuid($uuid);

        $commonRequest = new CommonRequest();
        $commonRequest->setComment($comment);

        if (self::getServiceClient()->validatePayment(new ValidatePayment($commonRequest, $queryRequest)) !== false) {
            $this->setResult(self::getServiceClient()->getResult()->validatePaymentResult);
            return !$this->hasError($this->getResult());
        } else {
            $this->setLastError(self::getServiceClient()->getLastError());
            return false;
        }
    }

    /**
     * updatePayment allows to:
     *  - edit the transaction amount (downward),
     *  - edit the desired capture date,
     * To be updated, transactions must have one of the following statuses:
     *  - To be validated
     *  - To be validated and authorized
     *  - Waiting for authorization.
     *  - Waiting for capture.
     * Note: if no detail is edited, an error code will appear and the query will be rejected.
     * @param string $uuid
     * @param string $amount
     * @param string <optionnal> $expectedCaptureDate
     * @param int $currency
     * @param int <optionnal> $manualValidation - 0|1
     * @param string <optionnal> $comment
     * @param int <optionnal> $paymentOptionCode
     * @return bool
     */
    public function updatePayment($uuid, $amount, $expectedCaptureDate = NULL, $currency = 978, $manualValidation = NULL, $comment = NULL, $paymentOptionCode = NULL)
    {
        // construct new service client
        self::setServiceClient(new Update($this->options));

        $queryRequest = new QueryRequest();
        $queryRequest->setUuid($uuid);

        $paymentRequest = new PaymentRequest();
        $paymentRequest->setAmount($amount)
            ->setCurrency($currency)
            ->setExpectedCaptureDate($expectedCaptureDate)
            ->setManualValidation($manualValidation)
            ->setPaymentOptionCode($paymentOptionCode);

        $commonRequest = new CommonRequest();
        $commonRequest->setComment($comment);

        if (self::getServiceClient()->updatePayment(new UpdatePayment($commonRequest, $queryRequest, $paymentRequest)) !== false) {
            $this->setResult(self::getServiceClient()->getResult()->updatePaymentResult);
            return !$this->hasError($this->getResult());
        } else {
            $this->setLastError(self::getServiceClient()->getLastError());
            return false;
        }
    }

    /**
     * The call to the createPayment operation allows to initialize a payment transaction.
     * Depending on the attribute values in the query, it is possible to make:
     *  - immediate payments,
     *  - deferred payments,
     *  - payments without 3D Secure authentication,
     *  - payments using an existing token
     * Note : 3DS is not implemented yet in this package
     * @param array $commonRequestParams
     * @param array <optionnal> $threeDSRequestParams
     * @param array $paymentRequestParams
     * @param array $orderRequestParams
     * @param array $cardRequestParams
     * @param array <optionnal> $customerRequestParams
     * @param array <optionnal> $techRequestParams
     * @param array <optionnal> $shoppingCartRequestParams
     * @return bool
     */
    public function createPayment($commonRequestParams, $threeDSRequestParams = array(), $paymentRequestParams, $orderRequestParams,
                                  $cardRequestParams, $customerRequestParams = array(), $techRequestParams = array(), $shoppingCartRequestParams = array())
    {
        // construct new service client
        self::setServiceClient(new Create($this->options));

        //let's construct all request objects
        $commonRequest = new CommonRequest();
        foreach ($commonRequestParams as $k => $v) {
            $commonRequest->$k = $v;
        }

        $threeDSRequest = new ThreeDSRequest();
        foreach ($threeDSRequestParams as $k => $v) {
            $threeDSRequest->$k = $v;
        }

        $paymentRequest = new PaymentRequest();
        foreach ($paymentRequestParams as $k => $v) {
            $paymentRequest->$k = $v;
        }

        $orderRequest = new OrderRequest();
        foreach ($orderRequestParams as $k => $v) {
            if (is_array($v)) {
                $orderRequest->extInfo = $v;
            }
            $orderRequest->$k = $v;
        }

        $cardRequest = new CardRequest();
        foreach ($cardRequestParams as $k => $v) {
            $cardRequest->$k = $v;
        }


        $billingDetailsRequest = new BillingDetailsRequest();
        $shippingDetailsRequest = new ShippingDetailsRequest();
        $extraDetailsRequest = new ExtraDetailsRequest();
        if (isset($customerRequestParams['billingDetails'])) {
            foreach ($customerRequestParams['billingDetails'] as $k => $v) {
                $billingDetailsRequest->$k = $v;
            }
        }
        if (isset($customerRequestParams['shippingDetails'])) {
            foreach ($customerRequestParams['shippingDetails'] as $k => $v) {
                $shippingDetailsRequest->$k = $v;
            }
        }
        if (isset($customerRequestParams['extraDetails'])) {
            foreach ($customerRequestParams['extraDetails'] as $k => $v) {
                $extraDetailsRequest->$k = $v;
            }
        }
        $customerRequest = new CustomerRequest($billingDetailsRequest, $shippingDetailsRequest, $extraDetailsRequest);

        $techRequest = new TechRequest();
        foreach ($techRequestParams as $k => $v) {
            $techRequest->$k = $v;
        }

        $shoppingCartRequest = new ShoppingCartRequest();
        foreach ($shoppingCartRequestParams as $k => $v) {
            if (is_array($v)) {
                $shoppingCartRequest->cartItemInfo = $v;
            }
            $shoppingCartRequest->$k = $v;
        }

        if (self::getServiceClient()->CreatePayment(new CreatePayment($commonRequest, $threeDSRequest, $paymentRequest, $orderRequest,
                $cardRequest, $customerRequest, $techRequest, $shoppingCartRequest)) !== false
        ) {
            $this->setResult(self::getServiceClient()->getResult()->createPaymentResult);
            return !$this->hasError($this->getResult());
        } else {
            $this->setLastError(self::getServiceClient()->getLastError());
            return false;
        }
    }

    /**
     * The cancelPayment operation allows to cancel a payment transaction.
     * cancelPayment allows to definitively cancel a not-yet-captured transaction with one of the following statuses:
     *  - To be validated
     *  - To be validated and authorized
     *  - Waiting for authorization.
     *  - Waiting for capture.
     * @param string $uuid
     * @param string <optionnal> $comment
     * @return bool
     */
    public function cancelPayment($uuid, $comment = NULL)
    {
        // construct new service client
        self::setServiceClient(new Cancel($this->options));

        $queryRequest = new QueryRequest();
        $queryRequest->setUuid($uuid);

        $commonRequest = new CommonRequest();
        $commonRequest->setComment($comment);

        if (self::getServiceClient()->CancelPayment(new CancelPayment($commonRequest, $queryRequest)) !== false) {
            $this->setResult(self::getServiceClient()->getResult()->cancelPaymentResult);
            return !$this->hasError($this->getResult());
        } else {
            $this->setLastError(self::getServiceClient()->getLastError());
            return false;
        }
    }

    /**
     * The refundPayment operation allows to refund a buyer.
     * The transactions subject to refund have the Captured status.
     * @param string $uuid
     * @param string $amount
     * @param string <optionnal> $expectedCaptureDate
     * @param int $currency
     * @param int <optionnal> $manualValidation - 0|1
     * @param string <optionnal> $comment
     * @return bool
     */
    public function refundPayment($uuid, $amount, $expectedCaptureDate = NULL, $currency = 978, $manualValidation = NULL, $comment = NULL)
    {
        // construct new service client
        self::setServiceClient(new Refund($this->options));

        $queryRequest = new QueryRequest();
        $queryRequest->setUuid($uuid);

        $paymentRequest = new PaymentRequest();
        $paymentRequest->setAmount($amount)
            ->setCurrency($currency)
            ->setExpectedCaptureDate($expectedCaptureDate)
            ->setManualValidation($manualValidation);

        $commonRequest = new CommonRequest();
        $commonRequest->setComment($comment);

        if (self::getServiceClient()->RefundPayment(new RefundPayment($commonRequest, $paymentRequest, $queryRequest)) !== false) {
            $this->setResult(self::getServiceClient()->getResult()->refundPaymentResult);
            return !$this->hasError($this->getResult());
        } else {
            $this->setLastError(self::getServiceClient()->getLastError());
            return false;
        }
    }

}