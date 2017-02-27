<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for markResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class MarkResponse extends AbstractStructBase
{
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
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $number;
    /**
     * The result
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $result;
    /**
     * Constructor method for markResponse
     * @uses MarkResponse::setAmount()
     * @uses MarkResponse::setCurrency()
     * @uses MarkResponse::setDate()
     * @uses MarkResponse::setNumber()
     * @uses MarkResponse::setResult()
     * @param int $amount
     * @param int $currency
     * @param string $date
     * @param string $number
     * @param int $result
     */
    public function __construct($amount = null, $currency = null, $date = null, $number = null, $result = null)
    {
        $this
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setDate($date)
            ->setNumber($number)
            ->setResult($result);
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
     * @return \Restoore\SystempayWebservice\StructType\MarkResponse
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
     * @return \Restoore\SystempayWebservice\StructType\MarkResponse
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
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Restoore\SystempayWebservice\StructType\MarkResponse
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Restoore\SystempayWebservice\StructType\MarkResponse
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get result value
     * @return int|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param int $result
     * @return \Restoore\SystempayWebservice\StructType\MarkResponse
     */
    public function setResult($result = null)
    {
        // validation for constraint: int
        if (!is_null($result) && !is_numeric($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($result)), __LINE__);
        }
        $this->result = $result;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\MarkResponse
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
