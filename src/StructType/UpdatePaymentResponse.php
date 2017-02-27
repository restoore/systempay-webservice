<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePaymentResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:updatePaymentResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class UpdatePaymentResponse extends AbstractStructBase
{
    /**
     * The updatePaymentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\UpdatePaymentResult
     */
    public $updatePaymentResult;
    /**
     * Constructor method for updatePaymentResponse
     * @uses UpdatePaymentResponse::setUpdatePaymentResult()
     * @param \Restoore\SystempayWebservice\StructType\UpdatePaymentResult $updatePaymentResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\UpdatePaymentResult $updatePaymentResult = null)
    {
        $this
            ->setUpdatePaymentResult($updatePaymentResult);
    }
    /**
     * Get updatePaymentResult value
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentResult|null
     */
    public function getUpdatePaymentResult()
    {
        return $this->updatePaymentResult;
    }
    /**
     * Set updatePaymentResult value
     * @param \Restoore\SystempayWebservice\StructType\UpdatePaymentResult $updatePaymentResult
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentResponse
     */
    public function setUpdatePaymentResult(\Restoore\SystempayWebservice\StructType\UpdatePaymentResult $updatePaymentResult = null)
    {
        $this->updatePaymentResult = $updatePaymentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentResponse
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
