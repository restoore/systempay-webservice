<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paymentResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class PaymentResponse extends AbstractStructBase
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
     * The effectiveAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $effectiveAmount;
    /**
     * The effectiveCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $effectiveCurrency;
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
     * The operationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $operationType;
    /**
     * The creationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $creationDate;
    /**
     * The externalTransactionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $externalTransactionId;
    /**
     * The liabilityShift
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $liabilityShift;
    /**
     * The transactionUuid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionUuid;
    /**
     * The sequenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $sequenceNumber;
    /**
     * The paymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentType;
    /**
     * The paymentError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $paymentError;
    /**
     * Constructor method for paymentResponse
     * @uses PaymentResponse::setTransactionId()
     * @uses PaymentResponse::setAmount()
     * @uses PaymentResponse::setCurrency()
     * @uses PaymentResponse::setEffectiveAmount()
     * @uses PaymentResponse::setEffectiveCurrency()
     * @uses PaymentResponse::setExpectedCaptureDate()
     * @uses PaymentResponse::setManualValidation()
     * @uses PaymentResponse::setOperationType()
     * @uses PaymentResponse::setCreationDate()
     * @uses PaymentResponse::setExternalTransactionId()
     * @uses PaymentResponse::setLiabilityShift()
     * @uses PaymentResponse::setTransactionUuid()
     * @uses PaymentResponse::setSequenceNumber()
     * @uses PaymentResponse::setPaymentType()
     * @uses PaymentResponse::setPaymentError()
     * @param string $transactionId
     * @param int $amount
     * @param int $currency
     * @param int $effectiveAmount
     * @param int $effectiveCurrency
     * @param string $expectedCaptureDate
     * @param int $manualValidation
     * @param int $operationType
     * @param string $creationDate
     * @param string $externalTransactionId
     * @param string $liabilityShift
     * @param string $transactionUuid
     * @param int $sequenceNumber
     * @param string $paymentType
     * @param int $paymentError
     */
    public function __construct($transactionId = null, $amount = null, $currency = null, $effectiveAmount = null, $effectiveCurrency = null, $expectedCaptureDate = null, $manualValidation = null, $operationType = null, $creationDate = null, $externalTransactionId = null, $liabilityShift = null, $transactionUuid = null, $sequenceNumber = null, $paymentType = null, $paymentError = null)
    {
        $this
            ->setTransactionId($transactionId)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setEffectiveAmount($effectiveAmount)
            ->setEffectiveCurrency($effectiveCurrency)
            ->setExpectedCaptureDate($expectedCaptureDate)
            ->setManualValidation($manualValidation)
            ->setOperationType($operationType)
            ->setCreationDate($creationDate)
            ->setExternalTransactionId($externalTransactionId)
            ->setLiabilityShift($liabilityShift)
            ->setTransactionUuid($transactionUuid)
            ->setSequenceNumber($sequenceNumber)
            ->setPaymentType($paymentType)
            ->setPaymentError($paymentError);
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
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
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
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
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
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
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
     * Get effectiveAmount value
     * @return int|null
     */
    public function getEffectiveAmount()
    {
        return $this->effectiveAmount;
    }
    /**
     * Set effectiveAmount value
     * @param int $effectiveAmount
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public function setEffectiveAmount($effectiveAmount = null)
    {
        // validation for constraint: int
        if (!is_null($effectiveAmount) && !is_numeric($effectiveAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($effectiveAmount)), __LINE__);
        }
        $this->effectiveAmount = $effectiveAmount;
        return $this;
    }
    /**
     * Get effectiveCurrency value
     * @return int|null
     */
    public function getEffectiveCurrency()
    {
        return $this->effectiveCurrency;
    }
    /**
     * Set effectiveCurrency value
     * @param int $effectiveCurrency
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public function setEffectiveCurrency($effectiveCurrency = null)
    {
        // validation for constraint: int
        if (!is_null($effectiveCurrency) && !is_numeric($effectiveCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($effectiveCurrency)), __LINE__);
        }
        $this->effectiveCurrency = $effectiveCurrency;
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
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
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
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
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
     * Get operationType value
     * @return int|null
     */
    public function getOperationType()
    {
        return $this->operationType;
    }
    /**
     * Set operationType value
     * @param int $operationType
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public function setOperationType($operationType = null)
    {
        // validation for constraint: int
        if (!is_null($operationType) && !is_numeric($operationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($operationType)), __LINE__);
        }
        $this->operationType = $operationType;
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * Get externalTransactionId value
     * @return string|null
     */
    public function getExternalTransactionId()
    {
        return $this->externalTransactionId;
    }
    /**
     * Set externalTransactionId value
     * @param string $externalTransactionId
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public function setExternalTransactionId($externalTransactionId = null)
    {
        // validation for constraint: string
        if (!is_null($externalTransactionId) && !is_string($externalTransactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalTransactionId)), __LINE__);
        }
        $this->externalTransactionId = $externalTransactionId;
        return $this;
    }
    /**
     * Get liabilityShift value
     * @return string|null
     */
    public function getLiabilityShift()
    {
        return $this->liabilityShift;
    }
    /**
     * Set liabilityShift value
     * @param string $liabilityShift
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public function setLiabilityShift($liabilityShift = null)
    {
        // validation for constraint: string
        if (!is_null($liabilityShift) && !is_string($liabilityShift)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($liabilityShift)), __LINE__);
        }
        $this->liabilityShift = $liabilityShift;
        return $this;
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
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
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
     * Get sequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }
    /**
     * Set sequenceNumber value
     * @param int $sequenceNumber
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @uses \Restoore\SystempayWebservice\EnumType\PaymentType::valueIsValid()
     * @uses \Restoore\SystempayWebservice\EnumType\PaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\Restoore\SystempayWebservice\EnumType\PaymentType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \Restoore\SystempayWebservice\EnumType\PaymentType::getValidValues())), __LINE__);
        }
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * Get paymentError value
     * @return int|null
     */
    public function getPaymentError()
    {
        return $this->paymentError;
    }
    /**
     * Set paymentError value
     * @param int $paymentError
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public function setPaymentError($paymentError = null)
    {
        // validation for constraint: int
        if (!is_null($paymentError) && !is_numeric($paymentError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paymentError)), __LINE__);
        }
        $this->paymentError = $paymentError;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse
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
