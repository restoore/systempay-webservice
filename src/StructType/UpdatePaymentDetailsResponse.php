<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePaymentDetailsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:updatePaymentDetailsResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class UpdatePaymentDetailsResponse extends AbstractStructBase
{
    /**
     * The updatePaymentDetailsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResult
     */
    public $updatePaymentDetailsResult;
    /**
     * Constructor method for updatePaymentDetailsResponse
     * @uses UpdatePaymentDetailsResponse::setUpdatePaymentDetailsResult()
     * @param \Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResult $updatePaymentDetailsResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResult $updatePaymentDetailsResult = null)
    {
        $this
            ->setUpdatePaymentDetailsResult($updatePaymentDetailsResult);
    }
    /**
     * Get updatePaymentDetailsResult value
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResult|null
     */
    public function getUpdatePaymentDetailsResult()
    {
        return $this->updatePaymentDetailsResult;
    }
    /**
     * Set updatePaymentDetailsResult value
     * @param \Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResult $updatePaymentDetailsResult
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResponse
     */
    public function setUpdatePaymentDetailsResult(\Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResult $updatePaymentDetailsResult = null)
    {
        $this->updatePaymentDetailsResult = $updatePaymentDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentDetailsResponse
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
