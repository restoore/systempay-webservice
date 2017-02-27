<?php

namespace Restoore\SystempayWebservice\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check Services
 * @subpackage Services
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named checkThreeDSAuthentication
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthentication $parameters
     * @return \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResponse|bool
     */
    public function checkThreeDSAuthentication(\Restoore\SystempayWebservice\StructType\CheckThreeDSAuthentication $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->checkThreeDSAuthentication($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResponse
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
