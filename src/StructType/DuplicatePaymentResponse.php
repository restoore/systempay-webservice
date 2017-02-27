<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for duplicatePaymentResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:duplicatePaymentResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class DuplicatePaymentResponse extends AbstractStructBase
{
    /**
     * The duplicatePaymentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\DuplicatePaymentResult
     */
    public $duplicatePaymentResult;
    /**
     * Constructor method for duplicatePaymentResponse
     * @uses DuplicatePaymentResponse::setDuplicatePaymentResult()
     * @param \Restoore\SystempayWebservice\StructType\DuplicatePaymentResult $duplicatePaymentResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\DuplicatePaymentResult $duplicatePaymentResult = null)
    {
        $this
            ->setDuplicatePaymentResult($duplicatePaymentResult);
    }
    /**
     * Get duplicatePaymentResult value
     * @return \Restoore\SystempayWebservice\StructType\DuplicatePaymentResult|null
     */
    public function getDuplicatePaymentResult()
    {
        return $this->duplicatePaymentResult;
    }
    /**
     * Set duplicatePaymentResult value
     * @param \Restoore\SystempayWebservice\StructType\DuplicatePaymentResult $duplicatePaymentResult
     * @return \Restoore\SystempayWebservice\StructType\DuplicatePaymentResponse
     */
    public function setDuplicatePaymentResult(\Restoore\SystempayWebservice\StructType\DuplicatePaymentResult $duplicatePaymentResult = null)
    {
        $this->duplicatePaymentResult = $duplicatePaymentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\DuplicatePaymentResponse
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
