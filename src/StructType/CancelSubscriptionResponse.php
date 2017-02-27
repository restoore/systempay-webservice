<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelSubscriptionResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:cancelSubscriptionResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CancelSubscriptionResponse extends AbstractStructBase
{
    /**
     * The cancelSubscriptionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CancelSubscriptionResult
     */
    public $cancelSubscriptionResult;
    /**
     * Constructor method for cancelSubscriptionResponse
     * @uses CancelSubscriptionResponse::setCancelSubscriptionResult()
     * @param \Restoore\SystempayWebservice\StructType\CancelSubscriptionResult $cancelSubscriptionResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CancelSubscriptionResult $cancelSubscriptionResult = null)
    {
        $this
            ->setCancelSubscriptionResult($cancelSubscriptionResult);
    }
    /**
     * Get cancelSubscriptionResult value
     * @return \Restoore\SystempayWebservice\StructType\CancelSubscriptionResult|null
     */
    public function getCancelSubscriptionResult()
    {
        return $this->cancelSubscriptionResult;
    }
    /**
     * Set cancelSubscriptionResult value
     * @param \Restoore\SystempayWebservice\StructType\CancelSubscriptionResult $cancelSubscriptionResult
     * @return \Restoore\SystempayWebservice\StructType\CancelSubscriptionResponse
     */
    public function setCancelSubscriptionResult(\Restoore\SystempayWebservice\StructType\CancelSubscriptionResult $cancelSubscriptionResult = null)
    {
        $this->cancelSubscriptionResult = $cancelSubscriptionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CancelSubscriptionResponse
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
