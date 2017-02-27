<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subscriptionRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class SubscriptionRequest extends AbstractStructBase
{
    /**
     * The subscriptionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $subscriptionId;
    /**
     * The effectDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $effectDate;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $amount;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $currency;
    /**
     * The initialAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $initialAmount;
    /**
     * The initialAmountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $initialAmountNumber;
    /**
     * The rrule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rrule;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * Constructor method for subscriptionRequest
     * @uses SubscriptionRequest::setSubscriptionId()
     * @uses SubscriptionRequest::setEffectDate()
     * @uses SubscriptionRequest::setAmount()
     * @uses SubscriptionRequest::setCurrency()
     * @uses SubscriptionRequest::setInitialAmount()
     * @uses SubscriptionRequest::setInitialAmountNumber()
     * @uses SubscriptionRequest::setRrule()
     * @uses SubscriptionRequest::setDescription()
     * @param string $subscriptionId
     * @param string $effectDate
     * @param int $amount
     * @param int $currency
     * @param int $initialAmount
     * @param int $initialAmountNumber
     * @param string $rrule
     * @param string $description
     */
    public function __construct($subscriptionId = null, $effectDate = null, $amount = null, $currency = null, $initialAmount = null, $initialAmountNumber = null, $rrule = null, $description = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setEffectDate($effectDate)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setInitialAmount($initialAmount)
            ->setInitialAmountNumber($initialAmountNumber)
            ->setRrule($rrule)
            ->setDescription($description);
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
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest
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
     * Get effectDate value
     * @return string|null
     */
    public function getEffectDate()
    {
        return $this->effectDate;
    }
    /**
     * Set effectDate value
     * @param string $effectDate
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest
     */
    public function setEffectDate($effectDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectDate) && !is_string($effectDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectDate)), __LINE__);
        }
        $this->effectDate = $effectDate;
        return $this;
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get currency value
     * @return int|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param int $currency
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: int
        if (!is_null($currency) && !is_numeric($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get initialAmount value
     * @return int|null
     */
    public function getInitialAmount()
    {
        return $this->initialAmount;
    }
    /**
     * Set initialAmount value
     * @param int $initialAmount
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest
     */
    public function setInitialAmount($initialAmount = null)
    {
        // validation for constraint: int
        if (!is_null($initialAmount) && !is_numeric($initialAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($initialAmount)), __LINE__);
        }
        $this->initialAmount = $initialAmount;
        return $this;
    }
    /**
     * Get initialAmountNumber value
     * @return int|null
     */
    public function getInitialAmountNumber()
    {
        return $this->initialAmountNumber;
    }
    /**
     * Set initialAmountNumber value
     * @param int $initialAmountNumber
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest
     */
    public function setInitialAmountNumber($initialAmountNumber = null)
    {
        // validation for constraint: int
        if (!is_null($initialAmountNumber) && !is_numeric($initialAmountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($initialAmountNumber)), __LINE__);
        }
        $this->initialAmountNumber = $initialAmountNumber;
        return $this;
    }
    /**
     * Get rrule value
     * @return string|null
     */
    public function getRrule()
    {
        return $this->rrule;
    }
    /**
     * Set rrule value
     * @param string $rrule
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest
     */
    public function setRrule($rrule = null)
    {
        // validation for constraint: string
        if (!is_null($rrule) && !is_string($rrule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rrule)), __LINE__);
        }
        $this->rrule = $rrule;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest
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
