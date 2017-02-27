<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subscriptionResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class SubscriptionResponse extends AbstractStructBase
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
     * The cancelDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cancelDate;
    /**
     * The initialAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $initialAmount;
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
     * The initialAmountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $initialAmountNumber;
    /**
     * The pastPaymentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $pastPaymentNumber;
    /**
     * The totalPaymentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $totalPaymentNumber;
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
     * Constructor method for subscriptionResponse
     * @uses SubscriptionResponse::setSubscriptionId()
     * @uses SubscriptionResponse::setEffectDate()
     * @uses SubscriptionResponse::setCancelDate()
     * @uses SubscriptionResponse::setInitialAmount()
     * @uses SubscriptionResponse::setRrule()
     * @uses SubscriptionResponse::setDescription()
     * @uses SubscriptionResponse::setInitialAmountNumber()
     * @uses SubscriptionResponse::setPastPaymentNumber()
     * @uses SubscriptionResponse::setTotalPaymentNumber()
     * @uses SubscriptionResponse::setAmount()
     * @uses SubscriptionResponse::setCurrency()
     * @param string $subscriptionId
     * @param string $effectDate
     * @param string $cancelDate
     * @param int $initialAmount
     * @param string $rrule
     * @param string $description
     * @param int $initialAmountNumber
     * @param int $pastPaymentNumber
     * @param int $totalPaymentNumber
     * @param int $amount
     * @param int $currency
     */
    public function __construct($subscriptionId = null, $effectDate = null, $cancelDate = null, $initialAmount = null, $rrule = null, $description = null, $initialAmountNumber = null, $pastPaymentNumber = null, $totalPaymentNumber = null, $amount = null, $currency = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setEffectDate($effectDate)
            ->setCancelDate($cancelDate)
            ->setInitialAmount($initialAmount)
            ->setRrule($rrule)
            ->setDescription($description)
            ->setInitialAmountNumber($initialAmountNumber)
            ->setPastPaymentNumber($pastPaymentNumber)
            ->setTotalPaymentNumber($totalPaymentNumber)
            ->setAmount($amount)
            ->setCurrency($currency);
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
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
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
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
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
     * Get cancelDate value
     * @return string|null
     */
    public function getCancelDate()
    {
        return $this->cancelDate;
    }
    /**
     * Set cancelDate value
     * @param string $cancelDate
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
     */
    public function setCancelDate($cancelDate = null)
    {
        // validation for constraint: string
        if (!is_null($cancelDate) && !is_string($cancelDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelDate)), __LINE__);
        }
        $this->cancelDate = $cancelDate;
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
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
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
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
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
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
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
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
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
     * Get pastPaymentNumber value
     * @return int|null
     */
    public function getPastPaymentNumber()
    {
        return $this->pastPaymentNumber;
    }
    /**
     * Set pastPaymentNumber value
     * @param int $pastPaymentNumber
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
     */
    public function setPastPaymentNumber($pastPaymentNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pastPaymentNumber) && !is_numeric($pastPaymentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pastPaymentNumber)), __LINE__);
        }
        $this->pastPaymentNumber = $pastPaymentNumber;
        return $this;
    }
    /**
     * Get totalPaymentNumber value
     * @return int|null
     */
    public function getTotalPaymentNumber()
    {
        return $this->totalPaymentNumber;
    }
    /**
     * Set totalPaymentNumber value
     * @param int $totalPaymentNumber
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
     */
    public function setTotalPaymentNumber($totalPaymentNumber = null)
    {
        // validation for constraint: int
        if (!is_null($totalPaymentNumber) && !is_numeric($totalPaymentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalPaymentNumber)), __LINE__);
        }
        $this->totalPaymentNumber = $totalPaymentNumber;
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
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
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
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse
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
