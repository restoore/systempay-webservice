<?php

namespace Restoore\SystempayWebservice\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get Services
 * @subpackage Services
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getPaymentUuid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\GetPaymentUuid $parameters
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentUuidResponse|bool
     */
    public function getPaymentUuid(\Restoore\SystempayWebservice\StructType\GetPaymentUuid $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getPaymentUuid($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSubscriptionDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\GetSubscriptionDetails $parameters
     * @return \Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResponse|bool
     */
    public function getSubscriptionDetails(\Restoore\SystempayWebservice\StructType\GetSubscriptionDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getSubscriptionDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\GetPaymentDetails $parameters
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentDetailsResponse|bool
     */
    public function getPaymentDetails(\Restoore\SystempayWebservice\StructType\GetPaymentDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getPaymentDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTokenDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\GetTokenDetails $parameters
     * @return \Restoore\SystempayWebservice\StructType\GetTokenDetailsResponse|bool
     */
    public function getTokenDetails(\Restoore\SystempayWebservice\StructType\GetTokenDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getTokenDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentDetailsResponse|\Restoore\SystempayWebservice\StructType\GetPaymentUuidResponse|\Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResponse|\Restoore\SystempayWebservice\StructType\GetTokenDetailsResponse
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
