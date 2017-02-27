<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for queryRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class QueryRequest extends AbstractStructBase
{
    /**
     * The uuid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $uuid;
    /**
     * The orderId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $orderId;
    /**
     * The subscriptionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $subscriptionId;
    /**
     * The paymentToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentToken;
    /**
     * Constructor method for queryRequest
     * @uses QueryRequest::setUuid()
     * @uses QueryRequest::setOrderId()
     * @uses QueryRequest::setSubscriptionId()
     * @uses QueryRequest::setPaymentToken()
     * @param string $uuid
     * @param string $orderId
     * @param string $subscriptionId
     * @param string $paymentToken
     */
    public function __construct($uuid = null, $orderId = null, $subscriptionId = null, $paymentToken = null)
    {
        $this
            ->setUuid($uuid)
            ->setOrderId($orderId)
            ->setSubscriptionId($subscriptionId)
            ->setPaymentToken($paymentToken);
    }
    /**
     * Get uuid value
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }
    /**
     * Set uuid value
     * @param string $uuid
     * @return \Restoore\SystempayWebservice\StructType\QueryRequest
     */
    public function setUuid($uuid = null)
    {
        // validation for constraint: string
        if (!is_null($uuid) && !is_string($uuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uuid)), __LINE__);
        }
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * Get orderId value
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param string $orderId
     * @return \Restoore\SystempayWebservice\StructType\QueryRequest
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Get subscriptionId value
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }
    /**
     * Set subscriptionId value
     * @param string $subscriptionId
     * @return \Restoore\SystempayWebservice\StructType\QueryRequest
     */
    public function setSubscriptionId($subscriptionId = null)
    {
        // validation for constraint: string
        if (!is_null($subscriptionId) && !is_string($subscriptionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subscriptionId)), __LINE__);
        }
        $this->subscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * Get paymentToken value
     * @return string|null
     */
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }
    /**
     * Set paymentToken value
     * @param string $paymentToken
     * @return \Restoore\SystempayWebservice\StructType\QueryRequest
     */
    public function setPaymentToken($paymentToken = null)
    {
        // validation for constraint: string
        if (!is_null($paymentToken) && !is_string($paymentToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentToken)), __LINE__);
        }
        $this->paymentToken = $paymentToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\QueryRequest
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
