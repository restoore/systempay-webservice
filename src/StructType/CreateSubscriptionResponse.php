<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createSubscriptionResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:createSubscriptionResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CreateSubscriptionResponse extends AbstractStructBase
{
    /**
     * The createSubscriptionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CreateSubscriptionResult
     */
    public $createSubscriptionResult;
    /**
     * Constructor method for createSubscriptionResponse
     * @uses CreateSubscriptionResponse::setCreateSubscriptionResult()
     * @param \Restoore\SystempayWebservice\StructType\CreateSubscriptionResult $createSubscriptionResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CreateSubscriptionResult $createSubscriptionResult = null)
    {
        $this
            ->setCreateSubscriptionResult($createSubscriptionResult);
    }
    /**
     * Get createSubscriptionResult value
     * @return \Restoore\SystempayWebservice\StructType\CreateSubscriptionResult|null
     */
    public function getCreateSubscriptionResult()
    {
        return $this->createSubscriptionResult;
    }
    /**
     * Set createSubscriptionResult value
     * @param \Restoore\SystempayWebservice\StructType\CreateSubscriptionResult $createSubscriptionResult
     * @return \Restoore\SystempayWebservice\StructType\CreateSubscriptionResponse
     */
    public function setCreateSubscriptionResult(\Restoore\SystempayWebservice\StructType\CreateSubscriptionResult $createSubscriptionResult = null)
    {
        $this->createSubscriptionResult = $createSubscriptionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CreateSubscriptionResponse
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
