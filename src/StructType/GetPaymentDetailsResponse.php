<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPaymentDetailsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getPaymentDetailsResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class GetPaymentDetailsResponse extends AbstractStructBase
{
    /**
     * The getPaymentDetailsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\GetPaymentDetailsResult
     */
    public $getPaymentDetailsResult;
    /**
     * Constructor method for getPaymentDetailsResponse
     * @uses GetPaymentDetailsResponse::setGetPaymentDetailsResult()
     * @param \Restoore\SystempayWebservice\StructType\GetPaymentDetailsResult $getPaymentDetailsResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\GetPaymentDetailsResult $getPaymentDetailsResult = null)
    {
        $this
            ->setGetPaymentDetailsResult($getPaymentDetailsResult);
    }
    /**
     * Get getPaymentDetailsResult value
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentDetailsResult|null
     */
    public function getGetPaymentDetailsResult()
    {
        return $this->getPaymentDetailsResult;
    }
    /**
     * Set getPaymentDetailsResult value
     * @param \Restoore\SystempayWebservice\StructType\GetPaymentDetailsResult $getPaymentDetailsResult
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentDetailsResponse
     */
    public function setGetPaymentDetailsResult(\Restoore\SystempayWebservice\StructType\GetPaymentDetailsResult $getPaymentDetailsResult = null)
    {
        $this->getPaymentDetailsResult = $getPaymentDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentDetailsResponse
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
