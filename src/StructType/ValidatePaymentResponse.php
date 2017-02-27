<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for validatePaymentResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:validatePaymentResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ValidatePaymentResponse extends AbstractStructBase
{
    /**
     * The validatePaymentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ValidatePaymentResult
     */
    public $validatePaymentResult;
    /**
     * Constructor method for validatePaymentResponse
     * @uses ValidatePaymentResponse::setValidatePaymentResult()
     * @param \Restoore\SystempayWebservice\StructType\ValidatePaymentResult $validatePaymentResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\ValidatePaymentResult $validatePaymentResult = null)
    {
        $this
            ->setValidatePaymentResult($validatePaymentResult);
    }
    /**
     * Get validatePaymentResult value
     * @return \Restoore\SystempayWebservice\StructType\ValidatePaymentResult|null
     */
    public function getValidatePaymentResult()
    {
        return $this->validatePaymentResult;
    }
    /**
     * Set validatePaymentResult value
     * @param \Restoore\SystempayWebservice\StructType\ValidatePaymentResult $validatePaymentResult
     * @return \Restoore\SystempayWebservice\StructType\ValidatePaymentResponse
     */
    public function setValidatePaymentResult(\Restoore\SystempayWebservice\StructType\ValidatePaymentResult $validatePaymentResult = null)
    {
        $this->validatePaymentResult = $validatePaymentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\ValidatePaymentResponse
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
