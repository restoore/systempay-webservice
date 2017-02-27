<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for captureResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CaptureResponse extends AbstractStructBase
{
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
     * @var int
     */
    public $number;
    /**
     * The reconciliationStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $reconciliationStatus;
    /**
     * The refundAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $refundAmount;
    /**
     * The refundCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $refundCurrency;
    /**
     * The chargeback
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $chargeback;
    /**
     * Constructor method for captureResponse
     * @uses CaptureResponse::setDate()
     * @uses CaptureResponse::setNumber()
     * @uses CaptureResponse::setReconciliationStatus()
     * @uses CaptureResponse::setRefundAmount()
     * @uses CaptureResponse::setRefundCurrency()
     * @uses CaptureResponse::setChargeback()
     * @param string $date
     * @param int $number
     * @param int $reconciliationStatus
     * @param int $refundAmount
     * @param int $refundCurrency
     * @param bool $chargeback
     */
    public function __construct($date = null, $number = null, $reconciliationStatus = null, $refundAmount = null, $refundCurrency = null, $chargeback = null)
    {
        $this
            ->setDate($date)
            ->setNumber($number)
            ->setReconciliationStatus($reconciliationStatus)
            ->setRefundAmount($refundAmount)
            ->setRefundCurrency($refundCurrency)
            ->setChargeback($chargeback);
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
     * @return \Restoore\SystempayWebservice\StructType\CaptureResponse
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
     * @return int|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param int $number
     * @return \Restoore\SystempayWebservice\StructType\CaptureResponse
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get reconciliationStatus value
     * @return int|null
     */
    public function getReconciliationStatus()
    {
        return $this->reconciliationStatus;
    }
    /**
     * Set reconciliationStatus value
     * @param int $reconciliationStatus
     * @return \Restoore\SystempayWebservice\StructType\CaptureResponse
     */
    public function setReconciliationStatus($reconciliationStatus = null)
    {
        // validation for constraint: int
        if (!is_null($reconciliationStatus) && !is_numeric($reconciliationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reconciliationStatus)), __LINE__);
        }
        $this->reconciliationStatus = $reconciliationStatus;
        return $this;
    }
    /**
     * Get refundAmount value
     * @return int|null
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }
    /**
     * Set refundAmount value
     * @param int $refundAmount
     * @return \Restoore\SystempayWebservice\StructType\CaptureResponse
     */
    public function setRefundAmount($refundAmount = null)
    {
        // validation for constraint: int
        if (!is_null($refundAmount) && !is_numeric($refundAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($refundAmount)), __LINE__);
        }
        $this->refundAmount = $refundAmount;
        return $this;
    }
    /**
     * Get refundCurrency value
     * @return int|null
     */
    public function getRefundCurrency()
    {
        return $this->refundCurrency;
    }
    /**
     * Set refundCurrency value
     * @param int $refundCurrency
     * @return \Restoore\SystempayWebservice\StructType\CaptureResponse
     */
    public function setRefundCurrency($refundCurrency = null)
    {
        // validation for constraint: int
        if (!is_null($refundCurrency) && !is_numeric($refundCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($refundCurrency)), __LINE__);
        }
        $this->refundCurrency = $refundCurrency;
        return $this;
    }
    /**
     * Get chargeback value
     * @return bool|null
     */
    public function getChargeback()
    {
        return $this->chargeback;
    }
    /**
     * Set chargeback value
     * @param bool $chargeback
     * @return \Restoore\SystempayWebservice\StructType\CaptureResponse
     */
    public function setChargeback($chargeback = null)
    {
        $this->chargeback = $chargeback;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CaptureResponse
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
