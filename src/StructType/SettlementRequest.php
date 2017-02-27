<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for settlementRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class SettlementRequest extends AbstractStructBase
{
    /**
     * The transactionUuids
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $transactionUuids;
    /**
     * The commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $commission;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * Constructor method for settlementRequest
     * @uses SettlementRequest::setTransactionUuids()
     * @uses SettlementRequest::setCommission()
     * @uses SettlementRequest::setDate()
     * @param string[] $transactionUuids
     * @param float $commission
     * @param string $date
     */
    public function __construct(array $transactionUuids = array(), $commission = null, $date = null)
    {
        $this
            ->setTransactionUuids($transactionUuids)
            ->setCommission($commission)
            ->setDate($date);
    }
    /**
     * Get transactionUuids value
     * @return string[]|null
     */
    public function getTransactionUuids()
    {
        return $this->transactionUuids;
    }
    /**
     * Set transactionUuids value
     * @throws \InvalidArgumentException
     * @param string[] $transactionUuids
     * @return \Restoore\SystempayWebservice\StructType\SettlementRequest
     */
    public function setTransactionUuids(array $transactionUuids = array())
    {
        foreach ($transactionUuids as $settlementRequestTransactionUuidsItem) {
            // validation for constraint: itemType
            if (!is_string($settlementRequestTransactionUuidsItem)) {
                throw new \InvalidArgumentException(sprintf('The transactionUuids property can only contain items of string, "%s" given', is_object($settlementRequestTransactionUuidsItem) ? get_class($settlementRequestTransactionUuidsItem) : gettype($settlementRequestTransactionUuidsItem)), __LINE__);
            }
        }
        $this->transactionUuids = $transactionUuids;
        return $this;
    }
    /**
     * Add item to transactionUuids value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Restoore\SystempayWebservice\StructType\SettlementRequest
     */
    public function addToTransactionUuids($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The transactionUuids property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->transactionUuids[] = $item;
        return $this;
    }
    /**
     * Get commission value
     * @return float|null
     */
    public function getCommission()
    {
        return $this->commission;
    }
    /**
     * Set commission value
     * @param float $commission
     * @return \Restoore\SystempayWebservice\StructType\SettlementRequest
     */
    public function setCommission($commission = null)
    {
        $this->commission = $commission;
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
     * @return \Restoore\SystempayWebservice\StructType\SettlementRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\SettlementRequest
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
