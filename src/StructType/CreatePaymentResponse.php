<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPaymentResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:createPaymentResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CreatePaymentResponse extends AbstractStructBase
{
    /**
     * The createPaymentResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public $createPaymentResult;
    /**
     * Constructor method for createPaymentResponse
     * @uses CreatePaymentResponse::setCreatePaymentResult()
     * @param \Restoore\SystempayWebservice\StructType\CreatePaymentResult $createPaymentResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CreatePaymentResult $createPaymentResult = null)
    {
        $this
            ->setCreatePaymentResult($createPaymentResult);
    }
    /**
     * Get createPaymentResult value
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult|null
     */
    public function getCreatePaymentResult()
    {
        return $this->createPaymentResult;
    }
    /**
     * Set createPaymentResult value
     * @param \Restoore\SystempayWebservice\StructType\CreatePaymentResult $createPaymentResult
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResponse
     */
    public function setCreatePaymentResult(\Restoore\SystempayWebservice\StructType\CreatePaymentResult $createPaymentResult = null)
    {
        $this->createPaymentResult = $createPaymentResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResponse
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
