<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class PaymentRequest extends AbstractStructBase
{
    /**
     * The transactionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionId;
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
     * The manualValidation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $manualValidation;
    /**
     * The paymentOptionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentOptionCode;
    /**
     * Constructor method for paymentRequest
     * @uses PaymentRequest::setTransactionId()
     * @uses PaymentRequest::setAmount()
     * @uses PaymentRequest::setCurrency()
     * @uses PaymentRequest::setExpectedCaptureDate()
     * @uses PaymentRequest::setManualValidation()
     * @uses PaymentRequest::setPaymentOptionCode()
     * @param string $transactionId
     * @param int $amount
     * @param int $currency
     * @param string $expectedCaptureDate
     * @param int $manualValidation
     * @param string $paymentOptionCode
     */
    public function __construct($transactionId = null, $amount = null, $currency = null, $expectedCaptureDate = null, $manualValidation = null, $paymentOptionCode = null)
    {
        $this
            ->setTransactionId($transactionId)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setExpectedCaptureDate($expectedCaptureDate)
            ->setManualValidation($manualValidation)
            ->setPaymentOptionCode($paymentOptionCode);
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Restoore\SystempayWebservice\StructType\PaymentRequest
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
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
     * @return \Restoore\SystempayWebservice\StructType\PaymentRequest
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
     * @return \Restoore\SystempayWebservice\StructType\PaymentRequest
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
     * @return \Restoore\SystempayWebservice\StructType\PaymentRequest
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
     * Get manualValidation value
     * @return int|null
     */
    public function getManualValidation()
    {
        return $this->manualValidation;
    }
    /**
     * Set manualValidation value
     * @param int $manualValidation
     * @return \Restoore\SystempayWebservice\StructType\PaymentRequest
     */
    public function setManualValidation($manualValidation = null)
    {
        // validation for constraint: int
        if (!is_null($manualValidation) && !is_numeric($manualValidation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($manualValidation)), __LINE__);
        }
        $this->manualValidation = $manualValidation;
        return $this;
    }
    /**
     * Get paymentOptionCode value
     * @return string|null
     */
    public function getPaymentOptionCode()
    {
        return $this->paymentOptionCode;
    }
    /**
     * Set paymentOptionCode value
     * @param string $paymentOptionCode
     * @return \Restoore\SystempayWebservice\StructType\PaymentRequest
     */
    public function setPaymentOptionCode($paymentOptionCode = null)
    {
        // validation for constraint: string
        if (!is_null($paymentOptionCode) && !is_string($paymentOptionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentOptionCode)), __LINE__);
        }
        $this->paymentOptionCode = $paymentOptionCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\PaymentRequest
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
