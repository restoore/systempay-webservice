<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateSubscriptionResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:updateSubscriptionResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class UpdateSubscriptionResponse extends AbstractStructBase
{
    /**
     * The updateSubscriptionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\UpdateSubscriptionResult
     */
    public $updateSubscriptionResult;
    /**
     * Constructor method for updateSubscriptionResponse
     * @uses UpdateSubscriptionResponse::setUpdateSubscriptionResult()
     * @param \Restoore\SystempayWebservice\StructType\UpdateSubscriptionResult $updateSubscriptionResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\UpdateSubscriptionResult $updateSubscriptionResult = null)
    {
        $this
            ->setUpdateSubscriptionResult($updateSubscriptionResult);
    }
    /**
     * Get updateSubscriptionResult value
     * @return \Restoore\SystempayWebservice\StructType\UpdateSubscriptionResult|null
     */
    public function getUpdateSubscriptionResult()
    {
        return $this->updateSubscriptionResult;
    }
    /**
     * Set updateSubscriptionResult value
     * @param \Restoore\SystempayWebservice\StructType\UpdateSubscriptionResult $updateSubscriptionResult
     * @return \Restoore\SystempayWebservice\StructType\UpdateSubscriptionResponse
     */
    public function setUpdateSubscriptionResult(\Restoore\SystempayWebservice\StructType\UpdateSubscriptionResult $updateSubscriptionResult = null)
    {
        $this->updateSubscriptionResult = $updateSubscriptionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\UpdateSubscriptionResponse
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
