<?php

namespace Restoore\SystempayWebservice\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel Services
 * @subpackage Services
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancelPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\CancelPayment $parameters
     * @return \Restoore\SystempayWebservice\StructType\CancelPaymentResponse|bool
     */
    public function cancelPayment(\Restoore\SystempayWebservice\StructType\CancelPayment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelPayment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\CancelToken $parameters
     * @return \Restoore\SystempayWebservice\StructType\CancelTokenResponse|bool
     */
    public function cancelToken(\Restoore\SystempayWebservice\StructType\CancelToken $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelToken($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelSubscription
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\CancelSubscription $parameters
     * @return \Restoore\SystempayWebservice\StructType\CancelSubscriptionResponse|bool
     */
    public function cancelSubscription(\Restoore\SystempayWebservice\StructType\CancelSubscription $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelSubscription($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Restoore\SystempayWebservice\StructType\CancelPaymentResponse|\Restoore\SystempayWebservice\StructType\CancelSubscriptionResponse|\Restoore\SystempayWebservice\StructType\CancelTokenResponse
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
