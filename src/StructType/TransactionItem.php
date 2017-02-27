<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transactionItem StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class TransactionItem extends AbstractStructBase
{
    /**
     * The transactionUuid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionUuid;
    /**
     * The transactionStatusLabel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionStatusLabel;
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
     * The expectedCaptureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expectedCaptureDate;
    /**
     * Constructor method for transactionItem
     * @uses TransactionItem::setTransactionUuid()
     * @uses TransactionItem::setTransactionStatusLabel()
     * @uses TransactionItem::setAmount()
     * @uses TransactionItem::setCurrency()
     * @uses TransactionItem::setExpectedCaptureDate()
     * @param string $transactionUuid
     * @param string $transactionStatusLabel
     * @param int $amount
     * @param int $currency
     * @param string $expectedCaptureDate
     */
    public function __construct($transactionUuid = null, $transactionStatusLabel = null, $amount = null, $currency = null, $expectedCaptureDate = null)
    {
        $this
            ->setTransactionUuid($transactionUuid)
            ->setTransactionStatusLabel($transactionStatusLabel)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setExpectedCaptureDate($expectedCaptureDate);
    }
    /**
     * Get transactionUuid value
     * @return string|null
     */
    public function getTransactionUuid()
    {
        return $this->transactionUuid;
    }
    /**
     * Set transactionUuid value
     * @param string $transactionUuid
     * @return \Restoore\SystempayWebservice\StructType\TransactionItem
     */
    public function setTransactionUuid($transactionUuid = null)
    {
        // validation for constraint: string
        if (!is_null($transactionUuid) && !is_string($transactionUuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionUuid)), __LINE__);
        }
        $this->transactionUuid = $transactionUuid;
        return $this;
    }
    /**
     * Get transactionStatusLabel value
     * @return string|null
     */
    public function getTransactionStatusLabel()
    {
        return $this->transactionStatusLabel;
    }
    /**
     * Set transactionStatusLabel value
     * @param string $transactionStatusLabel
     * @return \Restoore\SystempayWebservice\StructType\TransactionItem
     */
    public function setTransactionStatusLabel($transactionStatusLabel = null)
    {
        // validation for constraint: string
        if (!is_null($transactionStatusLabel) && !is_string($transactionStatusLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionStatusLabel)), __LINE__);
        }
        $this->transactionStatusLabel = $transactionStatusLabel;
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
     * @return \Restoore\SystempayWebservice\StructType\TransactionItem
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
     * @return \Restoore\SystempayWebservice\StructType\TransactionItem
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
     * Get expectedCaptureDate value
     * @return string|null
     */
    public function getExpectedCaptureDate()
    {
        return $this->expectedCaptureDate;
    }
    /**
     * Set expectedCaptureDate value
     * @param string $expectedCaptureDate
     * @return \Restoore\SystempayWebservice\StructType\TransactionItem
     */
    public function setExpectedCaptureDate($expectedCaptureDate = null)
    {
        // validation for constraint: string
        if (!is_null($expectedCaptureDate) && !is_string($expectedCaptureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expectedCaptureDate)), __LINE__);
        }
        $this->expectedCaptureDate = $expectedCaptureDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\TransactionItem
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
