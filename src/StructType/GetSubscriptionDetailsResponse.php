<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSubscriptionDetailsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getSubscriptionDetailsResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class GetSubscriptionDetailsResponse extends AbstractStructBase
{
    /**
     * The getSubscriptionDetailsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResult
     */
    public $getSubscriptionDetailsResult;
    /**
     * Constructor method for getSubscriptionDetailsResponse
     * @uses GetSubscriptionDetailsResponse::setGetSubscriptionDetailsResult()
     * @param \Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResult $getSubscriptionDetailsResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResult $getSubscriptionDetailsResult = null)
    {
        $this
            ->setGetSubscriptionDetailsResult($getSubscriptionDetailsResult);
    }
    /**
     * Get getSubscriptionDetailsResult value
     * @return \Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResult|null
     */
    public function getGetSubscriptionDetailsResult()
    {
        return $this->getSubscriptionDetailsResult;
    }
    /**
     * Set getSubscriptionDetailsResult value
     * @param \Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResult $getSubscriptionDetailsResult
     * @return \Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResponse
     */
    public function setGetSubscriptionDetailsResult(\Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResult $getSubscriptionDetailsResult = null)
    {
        $this->getSubscriptionDetailsResult = $getSubscriptionDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\GetSubscriptionDetailsResponse
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
