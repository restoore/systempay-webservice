<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createSubscription StructType
 * Meta informations extracted from the WSDL
 * - type: tns:createSubscription
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CreateSubscription extends AbstractStructBase
{
    /**
     * The commonRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonRequest
     */
    public $commonRequest;
    /**
     * The orderRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\OrderRequest
     */
    public $orderRequest;
    /**
     * The subscriptionRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\SubscriptionRequest
     */
    public $subscriptionRequest;
    /**
     * The cardRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CardRequest
     */
    public $cardRequest;
    /**
     * Constructor method for createSubscription
     * @uses CreateSubscription::setCommonRequest()
     * @uses CreateSubscription::setOrderRequest()
     * @uses CreateSubscription::setSubscriptionRequest()
     * @uses CreateSubscription::setCardRequest()
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @param \Restoore\SystempayWebservice\StructType\OrderRequest $orderRequest
     * @param \Restoore\SystempayWebservice\StructType\SubscriptionRequest $subscriptionRequest
     * @param \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null, \Restoore\SystempayWebservice\StructType\OrderRequest $orderRequest = null, \Restoore\SystempayWebservice\StructType\SubscriptionRequest $subscriptionRequest = null, \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest = null)
    {
        $this
            ->setCommonRequest($commonRequest)
            ->setOrderRequest($orderRequest)
            ->setSubscriptionRequest($subscriptionRequest)
            ->setCardRequest($cardRequest);
    }
    /**
     * Get commonRequest value
     * @return \Restoore\SystempayWebservice\StructType\CommonRequest|null
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }
    /**
     * Set commonRequest value
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @return \Restoore\SystempayWebservice\StructType\CreateSubscription
     */
    public function setCommonRequest(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }
    /**
     * Get orderRequest value
     * @return \Restoore\SystempayWebservice\StructType\OrderRequest|null
     */
    public function getOrderRequest()
    {
        return $this->orderRequest;
    }
    /**
     * Set orderRequest value
     * @param \Restoore\SystempayWebservice\StructType\OrderRequest $orderRequest
     * @return \Restoore\SystempayWebservice\StructType\CreateSubscription
     */
    public function setOrderRequest(\Restoore\SystempayWebservice\StructType\OrderRequest $orderRequest = null)
    {
        $this->orderRequest = $orderRequest;
        return $this;
    }
    /**
     * Get subscriptionRequest value
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest|null
     */
    public function getSubscriptionRequest()
    {
        return $this->subscriptionRequest;
    }
    /**
     * Set subscriptionRequest value
     * @param \Restoore\SystempayWebservice\StructType\SubscriptionRequest $subscriptionRequest
     * @return \Restoore\SystempayWebservice\StructType\CreateSubscription
     */
    public function setSubscriptionRequest(\Restoore\SystempayWebservice\StructType\SubscriptionRequest $subscriptionRequest = null)
    {
        $this->subscriptionRequest = $subscriptionRequest;
        return $this;
    }
    /**
     * Get cardRequest value
     * @return \Restoore\SystempayWebservice\StructType\CardRequest|null
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }
    /**
     * Set cardRequest value
     * @param \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest
     * @return \Restoore\SystempayWebservice\StructType\CreateSubscription
     */
    public function setCardRequest(\Restoore\SystempayWebservice\StructType\CardRequest $cardRequest = null)
    {
        $this->cardRequest = $cardRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CreateSubscription
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
