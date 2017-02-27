<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for refundPaymentResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:refundPaymentResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class RefundPaymentResponse extends AbstractStructBase
{
    /**
     * The refundPaymentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\RefundPaymentResult
     */
    public $refundPaymentResult;
    /**
     * Constructor method for refundPaymentResponse
     * @uses RefundPaymentResponse::setRefundPaymentResult()
     * @param \Restoore\SystempayWebservice\StructType\RefundPaymentResult $refundPaymentResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\RefundPaymentResult $refundPaymentResult = null)
    {
        $this
            ->setRefundPaymentResult($refundPaymentResult);
    }
    /**
     * Get refundPaymentResult value
     * @return \Restoore\SystempayWebservice\StructType\RefundPaymentResult|null
     */
    public function getRefundPaymentResult()
    {
        return $this->refundPaymentResult;
    }
    /**
     * Set refundPaymentResult value
     * @param \Restoore\SystempayWebservice\StructType\RefundPaymentResult $refundPaymentResult
     * @return \Restoore\SystempayWebservice\StructType\RefundPaymentResponse
     */
    public function setRefundPaymentResult(\Restoore\SystempayWebservice\StructType\RefundPaymentResult $refundPaymentResult = null)
    {
        $this->refundPaymentResult = $refundPaymentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\RefundPaymentResponse
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
