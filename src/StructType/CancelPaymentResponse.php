<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelPaymentResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:cancelPaymentResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CancelPaymentResponse extends AbstractStructBase
{
    /**
     * The cancelPaymentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CancelPaymentResult
     */
    public $cancelPaymentResult;
    /**
     * Constructor method for cancelPaymentResponse
     * @uses CancelPaymentResponse::setCancelPaymentResult()
     * @param \Restoore\SystempayWebservice\StructType\CancelPaymentResult $cancelPaymentResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CancelPaymentResult $cancelPaymentResult = null)
    {
        $this
            ->setCancelPaymentResult($cancelPaymentResult);
    }
    /**
     * Get cancelPaymentResult value
     * @return \Restoore\SystempayWebservice\StructType\CancelPaymentResult|null
     */
    public function getCancelPaymentResult()
    {
        return $this->cancelPaymentResult;
    }
    /**
     * Set cancelPaymentResult value
     * @param \Restoore\SystempayWebservice\StructType\CancelPaymentResult $cancelPaymentResult
     * @return \Restoore\SystempayWebservice\StructType\CancelPaymentResponse
     */
    public function setCancelPaymentResult(\Restoore\SystempayWebservice\StructType\CancelPaymentResult $cancelPaymentResult = null)
    {
        $this->cancelPaymentResult = $cancelPaymentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CancelPaymentResponse
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
