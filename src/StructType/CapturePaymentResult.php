<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for capturePaymentResult StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CapturePaymentResult extends WsResponse
{
    /**
     * The commonResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public $commonResponse;
    /**
     * Constructor method for capturePaymentResult
     * @uses CapturePaymentResult::setCommonResponse()
     * @param \Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse = null)
    {
        $this
            ->setCommonResponse($commonResponse);
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
     * @return \Restoore\SystempayWebservice\StructType\CapturePaymentResult
     */
    public function setCommonResponse(\Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse = null)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CapturePaymentResult
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
