<?php

namespace Restoore\SystempayWebservice\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Verify Services
 * @subpackage Services
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class Verify extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named verifyThreeDSEnrollment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollment $parameters
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResponse|bool
     */
    public function verifyThreeDSEnrollment(\Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->verifyThreeDSEnrollment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResponse
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
