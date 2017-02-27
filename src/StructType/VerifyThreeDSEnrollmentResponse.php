<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyThreeDSEnrollmentResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:verifyThreeDSEnrollmentResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class VerifyThreeDSEnrollmentResponse extends AbstractStructBase
{
    /**
     * The verifyThreeDSEnrollmentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResult
     */
    public $verifyThreeDSEnrollmentResult;
    /**
     * Constructor method for verifyThreeDSEnrollmentResponse
     * @uses VerifyThreeDSEnrollmentResponse::setVerifyThreeDSEnrollmentResult()
     * @param \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResult $verifyThreeDSEnrollmentResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResult $verifyThreeDSEnrollmentResult = null)
    {
        $this
            ->setVerifyThreeDSEnrollmentResult($verifyThreeDSEnrollmentResult);
    }
    /**
     * Get verifyThreeDSEnrollmentResult value
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResult|null
     */
    public function getVerifyThreeDSEnrollmentResult()
    {
        return $this->verifyThreeDSEnrollmentResult;
    }
    /**
     * Set verifyThreeDSEnrollmentResult value
     * @param \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResult $verifyThreeDSEnrollmentResult
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResponse
     */
    public function setVerifyThreeDSEnrollmentResult(\Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResult $verifyThreeDSEnrollmentResult = null)
    {
        $this->verifyThreeDSEnrollmentResult = $verifyThreeDSEnrollmentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
