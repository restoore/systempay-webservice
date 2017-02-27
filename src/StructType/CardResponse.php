<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cardResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CardResponse extends AbstractStructBase
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
     * The brand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $brand;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The productCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productCode;
    /**
     * The bankCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bankCode;
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
     * Constructor method for cardResponse
     * @uses CardResponse::setNumber()
     * @uses CardResponse::setScheme()
     * @uses CardResponse::setBrand()
     * @uses CardResponse::setCountry()
     * @uses CardResponse::setProductCode()
     * @uses CardResponse::setBankCode()
     * @uses CardResponse::setExpiryMonth()
     * @uses CardResponse::setExpiryYear()
     * @param string $number
     * @param string $scheme
     * @param string $brand
     * @param string $country
     * @param string $productCode
     * @param string $bankCode
     * @param int $expiryMonth
     * @param int $expiryYear
     */
    public function __construct($number = null, $scheme = null, $brand = null, $country = null, $productCode = null, $bankCode = null, $expiryMonth = null, $expiryYear = null)
    {
        $this
            ->setNumber($number)
            ->setScheme($scheme)
            ->setBrand($brand)
            ->setCountry($country)
            ->setProductCode($productCode)
            ->setBankCode($bankCode)
            ->setExpiryMonth($expiryMonth)
            ->setExpiryYear($expiryYear);
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
     * @return \Restoore\SystempayWebservice\StructType\CardResponse
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
     * @return \Restoore\SystempayWebservice\StructType\CardResponse
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
     * Get brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * Set brand value
     * @param string $brand
     * @return \Restoore\SystempayWebservice\StructType\CardResponse
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        $this->brand = $brand;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Restoore\SystempayWebservice\StructType\CardResponse
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \Restoore\SystempayWebservice\StructType\CardResponse
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Get bankCode value
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }
    /**
     * Set bankCode value
     * @param string $bankCode
     * @return \Restoore\SystempayWebservice\StructType\CardResponse
     */
    public function setBankCode($bankCode = null)
    {
        // validation for constraint: string
        if (!is_null($bankCode) && !is_string($bankCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankCode)), __LINE__);
        }
        $this->bankCode = $bankCode;
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
     * @return \Restoore\SystempayWebservice\StructType\CardResponse
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
     * @return \Restoore\SystempayWebservice\StructType\CardResponse
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CardResponse
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
