<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cardRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CardRequest extends AbstractStructBase
{
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $number;
    /**
     * The scheme
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $scheme;
    /**
     * The expiryMonth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $expiryMonth;
    /**
     * The expiryYear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $expiryYear;
    /**
     * The cardSecurityCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardSecurityCode;
    /**
     * The cardHolderBirthDay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderBirthDay;
    /**
     * The paymentToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentToken;
    /**
     * Constructor method for cardRequest
     * @uses CardRequest::setNumber()
     * @uses CardRequest::setScheme()
     * @uses CardRequest::setExpiryMonth()
     * @uses CardRequest::setExpiryYear()
     * @uses CardRequest::setCardSecurityCode()
     * @uses CardRequest::setCardHolderBirthDay()
     * @uses CardRequest::setPaymentToken()
     * @param string $number
     * @param string $scheme
     * @param int $expiryMonth
     * @param int $expiryYear
     * @param string $cardSecurityCode
     * @param string $cardHolderBirthDay
     * @param string $paymentToken
     */
    public function __construct($number = null, $scheme = null, $expiryMonth = null, $expiryYear = null, $cardSecurityCode = null, $cardHolderBirthDay = null, $paymentToken = null)
    {
        $this
            ->setNumber($number)
            ->setScheme($scheme)
            ->setExpiryMonth($expiryMonth)
            ->setExpiryYear($expiryYear)
            ->setCardSecurityCode($cardSecurityCode)
            ->setCardHolderBirthDay($cardHolderBirthDay)
            ->setPaymentToken($paymentToken);
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
     * @return \Restoore\SystempayWebservice\StructType\CardRequest
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
     * Get scheme value
     * @return string|null
     */
    public function getScheme()
    {
        return $this->scheme;
    }
    /**
     * Set scheme value
     * @param string $scheme
     * @return \Restoore\SystempayWebservice\StructType\CardRequest
     */
    public function setScheme($scheme = null)
    {
        // validation for constraint: string
        if (!is_null($scheme) && !is_string($scheme)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheme)), __LINE__);
        }
        $this->scheme = $scheme;
        return $this;
    }
    /**
     * Get expiryMonth value
     * @return int|null
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }
    /**
     * Set expiryMonth value
     * @param int $expiryMonth
     * @return \Restoore\SystempayWebservice\StructType\CardRequest
     */
    public function setExpiryMonth($expiryMonth = null)
    {
        // validation for constraint: int
        if (!is_null($expiryMonth) && !is_numeric($expiryMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expiryMonth)), __LINE__);
        }
        $this->expiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * Get expiryYear value
     * @return int|null
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }
    /**
     * Set expiryYear value
     * @param int $expiryYear
     * @return \Restoore\SystempayWebservice\StructType\CardRequest
     */
    public function setExpiryYear($expiryYear = null)
    {
        // validation for constraint: int
        if (!is_null($expiryYear) && !is_numeric($expiryYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expiryYear)), __LINE__);
        }
        $this->expiryYear = $expiryYear;
        return $this;
    }
    /**
     * Get cardSecurityCode value
     * @return string|null
     */
    public function getCardSecurityCode()
    {
        return $this->cardSecurityCode;
    }
    /**
     * Set cardSecurityCode value
     * @param string $cardSecurityCode
     * @return \Restoore\SystempayWebservice\StructType\CardRequest
     */
    public function setCardSecurityCode($cardSecurityCode = null)
    {
        // validation for constraint: string
        if (!is_null($cardSecurityCode) && !is_string($cardSecurityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardSecurityCode)), __LINE__);
        }
        $this->cardSecurityCode = $cardSecurityCode;
        return $this;
    }
    /**
     * Get cardHolderBirthDay value
     * @return string|null
     */
    public function getCardHolderBirthDay()
    {
        return $this->cardHolderBirthDay;
    }
    /**
     * Set cardHolderBirthDay value
     * @param string $cardHolderBirthDay
     * @return \Restoore\SystempayWebservice\StructType\CardRequest
     */
    public function setCardHolderBirthDay($cardHolderBirthDay = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderBirthDay) && !is_string($cardHolderBirthDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderBirthDay)), __LINE__);
        }
        $this->cardHolderBirthDay = $cardHolderBirthDay;
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
     * @return \Restoore\SystempayWebservice\StructType\CardRequest
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
     * @return \Restoore\SystempayWebservice\StructType\CardRequest
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
