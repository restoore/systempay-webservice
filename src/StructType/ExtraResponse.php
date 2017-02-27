<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for extraResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ExtraResponse extends AbstractStructBase
{
    /**
     * The paymentOptionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentOptionCode;
    /**
     * The paymentOptionOccNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $paymentOptionOccNumber;
    /**
     * Constructor method for extraResponse
     * @uses ExtraResponse::setPaymentOptionCode()
     * @uses ExtraResponse::setPaymentOptionOccNumber()
     * @param string $paymentOptionCode
     * @param int $paymentOptionOccNumber
     */
    public function __construct($paymentOptionCode = null, $paymentOptionOccNumber = null)
    {
        $this
            ->setPaymentOptionCode($paymentOptionCode)
            ->setPaymentOptionOccNumber($paymentOptionOccNumber);
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
     * @return \Restoore\SystempayWebservice\StructType\ExtraResponse
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
     * Get paymentOptionOccNumber value
     * @return int|null
     */
    public function getPaymentOptionOccNumber()
    {
        return $this->paymentOptionOccNumber;
    }
    /**
     * Set paymentOptionOccNumber value
     * @param int $paymentOptionOccNumber
     * @return \Restoore\SystempayWebservice\StructType\ExtraResponse
     */
    public function setPaymentOptionOccNumber($paymentOptionOccNumber = null)
    {
        // validation for constraint: int
        if (!is_null($paymentOptionOccNumber) && !is_numeric($paymentOptionOccNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paymentOptionOccNumber)), __LINE__);
        }
        $this->paymentOptionOccNumber = $paymentOptionOccNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\ExtraResponse
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
