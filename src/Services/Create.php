<?php

namespace Restoore\SystempayWebservice\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create Services
 * @subpackage Services
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createTokenFromTransaction
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\CreateTokenFromTransaction $parameters
     * @return \Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResponse|bool
     */
    public function createTokenFromTransaction(\Restoore\SystempayWebservice\StructType\CreateTokenFromTransaction $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->createTokenFromTransaction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\CreatePayment $parameters
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResponse|bool
     */
    public function createPayment(\Restoore\SystempayWebservice\StructType\CreatePayment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->createPayment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createSubscription
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\CreateSubscription $parameters
     * @return \Restoore\SystempayWebservice\StructType\CreateSubscriptionResponse|bool
     */
    public function createSubscription(\Restoore\SystempayWebservice\StructType\CreateSubscription $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->createSubscription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\CreateToken $parameters
     * @return \Restoore\SystempayWebservice\StructType\CreateTokenResponse|bool
     */
    public function createToken(\Restoore\SystempayWebservice\StructType\CreateToken $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->createToken($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResponse|\Restoore\SystempayWebservice\StructType\CreateSubscriptionResponse|\Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResponse|\Restoore\SystempayWebservice\StructType\CreateTokenResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
