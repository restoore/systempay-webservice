<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyThreeDSEnrollmentResult StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class VerifyThreeDSEnrollmentResult extends WsResponse
{
    /**
     * The commonResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public $commonResponse;
    /**
     * The threeDSResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ThreeDSResponse
     */
    public $threeDSResponse;
    /**
     * Constructor method for verifyThreeDSEnrollmentResult
     * @uses VerifyThreeDSEnrollmentResult::setCommonResponse()
     * @uses VerifyThreeDSEnrollmentResult::setThreeDSResponse()
     * @param \Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse
     * @param \Restoore\SystempayWebservice\StructType\ThreeDSResponse $threeDSResponse
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse = null, \Restoore\SystempayWebservice\StructType\ThreeDSResponse $threeDSResponse = null)
    {
        $this
            ->setCommonResponse($commonResponse)
            ->setThreeDSResponse($threeDSResponse);
    }
    /**
     * Get commonResponse value
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse|null
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }
    /**
     * Set commonResponse value
     * @param \Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResult
     */
    public function setCommonResponse(\Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse = null)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }
    /**
     * Get threeDSResponse value
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSResponse|null
     */
    public function getThreeDSResponse()
    {
        return $this->threeDSResponse;
    }
    /**
     * Set threeDSResponse value
     * @param \Restoore\SystempayWebservice\StructType\ThreeDSResponse $threeDSResponse
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResult
     */
    public function setThreeDSResponse(\Restoore\SystempayWebservice\StructType\ThreeDSResponse $threeDSResponse = null)
    {
        $this->threeDSResponse = $threeDSResponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollmentResult
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
