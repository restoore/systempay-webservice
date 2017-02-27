<?php

use Restoore\SystempayWebservice\Facades\SystempayWebservice;

class SystempayWebserviceTest extends TestCase
{

    private $orderId;
    private $submissionDate;
    private $transactionId;

    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param mixed $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return mixed
     */
    public function getSubmissionDate()
    {
        return $this->submissionDate;
    }

    /**
     * @param mixed $submissionDate
     */
    public function setSubmissionDate($submissionDate)
    {
        $this->submissionDate = $submissionDate;
    }


    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function setUp()
    {
        parent::setUp();
        $this->setSubmissionDate(date('Y-m-d\TH:m:s\Z'));
        $this->setOrderId("PHPUnitTest");
    }


    public function testCreatePayment()
    {
        //Generate a new transaction
        $commonRequest = [
            'paymentSource' => 'CC',
            'submissionDate' => $this->getSubmissionDate()
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
            'orderId' => $this->getOrderId(),
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
        $customerRequest = [
            'billingDetails' => [
                'reference' => "007",
                'title' => "Monsieur",
                'type' => "PRIVATE",
                'firstName' => "Jean Pierre",
                'lastName' => "MICHEL",
                'phoneNumber' => "0300000000",
                'email' => "test.payzen@gmail.com",
                'streetNumber' => "1",
                'address' => "rue des Loups",
                'district' => "Quartier de la bergerie",
                'zipCode' => "67000",
                'city' => "Strasbourg",
                'state' => "Bas-Rhin",
                'country' => "FR",
                'language' => "fr",
                'cellPhoneNumber' => "0600000000",
                'identityCode' => '29267210132581'
            ],
            'shippingDetails' => [
                'type' => "PRIVATE",
                'firstName' => "Jean Pierre",
                'lastName' => "MICHEL",
                'phoneNumber' => "0300000000",
                'streetNumber' => "1",
                'address' => "rue des Loups",
                'address2' => "1er étage",
                'district' => "Quartier de la bergerie",
                'zipCode' => "67000",
                'city' => "Strasbourg",
                'state' => "Bas-Rhin",
                'country' => "France",
                'deliveryCompanyName' => "UPS",
                'shippingSpeed' => "EXPRESS",
                'shippingMethod' => "RELAY_POINT",
                'legalName' => "je suis un particulier",
                'identityCode' => '29267210132581'
            ],
            'extraDetails' => [
                'ipAddress' => "8.8.8.8"
            ]
        ];
        $techRequest = [
            'browserUserAgent' => 'Mozilla Firefox - version 56.0.231.1',
            'browserAccept' => 'Mozilla Firefox - version 56.0.231.1'
        ];
        $shoppingCartRequest = [
            'insuranceAmount' => '100',
            'shippingAmount' => '15',
            'shippingAmount' => '15',
            'taxAmount' => '38',
            'cartItemInfo' => [
                [
                    'productLabel' => 'Apple Iphone 7s Plus 128Go',
                    'productType' => 'TELEPHONY',
                    'productRef' => 'I7S128',
                    'productQty' => '1',
                    'productAmount' => '100000',
                    'productVat' => '20000'
                ], [
                    'productLabel' => 'Headphones Skulls',
                    'productType' => 'TELEPHONY',
                    'productRef' => 'SK2141',
                    'productQty' => '1',
                    'productAmount' => '25000',
                    'productVat' => '2400'
                ]
            ]
        ];
        //create payment test
        self::assertTrue(SystempayWebservice::createPayment($commonRequest, $threeDSRequest, $paymentRequest, $orderRequest,
            $cardRequest, $customerRequest, $techRequest, $shoppingCartRequest));
        //check object return for createpayment
        self::assertInstanceOf('Restoore\SystempayWebservice\StructType\CreatePaymentResult',SystempayWebservice::getResult());
        $transactionId = SystempayWebservice::getResult()->paymentResponse->transactionId;
        return $transactionId;
    }

    /**
     * @depends testCreatePayment
     * @param $transactionId
     * @return mixed
     */
    public function testGetPaymentUuid($transactionId){
        $uuid = SystempayWebservice::getPaymentUuid($transactionId,$this->getSubmissionDate());
        self::assertStringMatchesFormat('%s',$uuid);
        return $uuid;
    }

    /**
     * @depends testGetPaymentUuid
     * @param $uuid
     */
    public function testGetPaymentDetails($uuid){
        SystempayWebservice::getPaymentDetails($uuid);
        self::assertEquals($this->getOrderId(),SystempayWebservice::getResult()->orderResponse->orderId);
    }

    /**
     * @depends testGetPaymentUuid
     * @param $uuid
     */
    public function testUpdatePayment($uuid){
        //update transaction and change amount, submission date to d+1 & leave a comment
        self::assertTrue(SystempayWebservice::updatePayment($uuid, '2590',date('Y-m-d\TH:m:s\Z', time() + 3600 * 24) ,978,0,'Here is my comment !'));
        //check if new amount is save
        self::assertEquals(2590,SystempayWebservice::getResult()->paymentResponse->amount);
    }

    /**
     * @depends testGetPaymentUuid
     * @param $uuid
     */
    public function testCancelPayement($uuid){
        self::assertTrue(SystempayWebservice::cancelPayment($uuid, 'Here my cancel comment !'));
        self::assertEquals('CANCELLED',SystempayWebservice::getResult()->commonResponse->transactionStatusLabel);
    }


}
