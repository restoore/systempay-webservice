<?php

namespace Restoore\SystempayWebservice\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update Services
 * @subpackage Services
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updatePayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\UpdatePayment $parameters
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentResponse|bool
     */
    public function updatePayment(\Restoore\SystempayWebservice\StructType\UpdatePayment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->updatePayment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePaymentDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\UpdatePaymentDetails $parameters
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResponse|bool
     */
    public function updatePaymentDetails(\Restoore\SystempayWebservice\StructType\UpdatePaymentDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->updatePaymentDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateSubscription
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\UpdateSubscription $parameters
     * @return \Restoore\SystempayWebservice\StructType\UpdateSubscriptionResponse|bool
     */
    public function updateSubscription(\Restoore\SystempayWebservice\StructType\UpdateSubscription $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->updateSubscription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\UpdateToken $parameters
     * @return \Restoore\SystempayWebservice\StructType\UpdateTokenResponse|bool
     */
    public function updateToken(\Restoore\SystempayWebservice\StructType\UpdateToken $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->updateToken($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResponse|\Restoore\SystempayWebservice\StructType\UpdatePaymentResponse|\Restoore\SystempayWebservice\StructType\UpdateSubscriptionResponse|\Restoore\SystempayWebservice\StructType\UpdateTokenResponse
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
