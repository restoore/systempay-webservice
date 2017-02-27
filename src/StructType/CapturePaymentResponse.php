<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for capturePaymentResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:capturePaymentResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CapturePaymentResponse extends AbstractStructBase
{
    /**
     * The capturePaymentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CapturePaymentResult
     */
    public $capturePaymentResult;
    /**
     * Constructor method for capturePaymentResponse
     * @uses CapturePaymentResponse::setCapturePaymentResult()
     * @param \Restoore\SystempayWebservice\StructType\CapturePaymentResult $capturePaymentResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CapturePaymentResult $capturePaymentResult = null)
    {
        $this
            ->setCapturePaymentResult($capturePaymentResult);
    }
    /**
     * Get capturePaymentResult value
     * @return \Restoore\SystempayWebservice\StructType\CapturePaymentResult|null
     */
    public function getCapturePaymentResult()
    {
        return $this->capturePaymentResult;
    }
    /**
     * Set capturePaymentResult value
     * @param \Restoore\SystempayWebservice\StructType\CapturePaymentResult $capturePaymentResult
     * @return \Restoore\SystempayWebservice\StructType\CapturePaymentResponse
     */
    public function setCapturePaymentResult(\Restoore\SystempayWebservice\StructType\CapturePaymentResult $capturePaymentResult = null)
    {
        $this->capturePaymentResult = $capturePaymentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CapturePaymentResponse
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
