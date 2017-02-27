<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cartItemInfo StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CartItemInfo extends AbstractStructBase
{
    /**
     * The productLabel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productLabel;
    /**
     * The productType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productType;
    /**
     * The productRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productRef;
    /**
     * The productQty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $productQty;
    /**
     * The productAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productAmount;
    /**
     * The productVat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productVat;
    /**
     * The productExtId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productExtId;
    /**
     * Constructor method for cartItemInfo
     * @uses CartItemInfo::setProductLabel()
     * @uses CartItemInfo::setProductType()
     * @uses CartItemInfo::setProductRef()
     * @uses CartItemInfo::setProductQty()
     * @uses CartItemInfo::setProductAmount()
     * @uses CartItemInfo::setProductVat()
     * @uses CartItemInfo::setProductExtId()
     * @param string $productLabel
     * @param string $productType
     * @param string $productRef
     * @param int $productQty
     * @param string $productAmount
     * @param string $productVat
     * @param string $productExtId
     */
    public function __construct($productLabel = null, $productType = null, $productRef = null, $productQty = null, $productAmount = null, $productVat = null, $productExtId = null)
    {
        $this
            ->setProductLabel($productLabel)
            ->setProductType($productType)
            ->setProductRef($productRef)
            ->setProductQty($productQty)
            ->setProductAmount($productAmount)
            ->setProductVat($productVat)
            ->setProductExtId($productExtId);
    }
    /**
     * Get productLabel value
     * @return string|null
     */
    public function getProductLabel()
    {
        return $this->productLabel;
    }
    /**
     * Set productLabel value
     * @param string $productLabel
     * @return \Restoore\SystempayWebservice\StructType\CartItemInfo
     */
    public function setProductLabel($productLabel = null)
    {
        // validation for constraint: string
        if (!is_null($productLabel) && !is_string($productLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productLabel)), __LINE__);
        }
        $this->productLabel = $productLabel;
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @uses \Restoore\SystempayWebservice\EnumType\ProductType::valueIsValid()
     * @uses \Restoore\SystempayWebservice\EnumType\ProductType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productType
     * @return \Restoore\SystempayWebservice\StructType\CartItemInfo
     */
    public function setProductType($productType = null)
    {
        // validation for constraint: enumeration
        if (!\Restoore\SystempayWebservice\EnumType\ProductType::valueIsValid($productType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productType, implode(', ', \Restoore\SystempayWebservice\EnumType\ProductType::getValidValues())), __LINE__);
        }
        $this->productType = $productType;
        return $this;
    }
    /**
     * Get productRef value
     * @return string|null
     */
    public function getProductRef()
    {
        return $this->productRef;
    }
    /**
     * Set productRef value
     * @param string $productRef
     * @return \Restoore\SystempayWebservice\StructType\CartItemInfo
     */
    public function setProductRef($productRef = null)
    {
        // validation for constraint: string
        if (!is_null($productRef) && !is_string($productRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productRef)), __LINE__);
        }
        $this->productRef = $productRef;
        return $this;
    }
    /**
     * Get productQty value
     * @return int|null
     */
    public function getProductQty()
    {
        return $this->productQty;
    }
    /**
     * Set productQty value
     * @param int $productQty
     * @return \Restoore\SystempayWebservice\StructType\CartItemInfo
     */
    public function setProductQty($productQty = null)
    {
        // validation for constraint: int
        if (!is_null($productQty) && !is_numeric($productQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productQty)), __LINE__);
        }
        $this->productQty = $productQty;
        return $this;
    }
    /**
     * Get productAmount value
     * @return string|null
     */
    public function getProductAmount()
    {
        return $this->productAmount;
    }
    /**
     * Set productAmount value
     * @param string $productAmount
     * @return \Restoore\SystempayWebservice\StructType\CartItemInfo
     */
    public function setProductAmount($productAmount = null)
    {
        // validation for constraint: string
        if (!is_null($productAmount) && !is_string($productAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productAmount)), __LINE__);
        }
        $this->productAmount = $productAmount;
        return $this;
    }
    /**
     * Get productVat value
     * @return string|null
     */
    public function getProductVat()
    {
        return $this->productVat;
    }
    /**
     * Set productVat value
     * @param string $productVat
     * @return \Restoore\SystempayWebservice\StructType\CartItemInfo
     */
    public function setProductVat($productVat = null)
    {
        // validation for constraint: string
        if (!is_null($productVat) && !is_string($productVat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productVat)), __LINE__);
        }
        $this->productVat = $productVat;
        return $this;
    }
    /**
     * Get productExtId value
     * @return string|null
     */
    public function getProductExtId()
    {
        return $this->productExtId;
    }
    /**
     * Set productExtId value
     * @param string $productExtId
     * @return \Restoore\SystempayWebservice\StructType\CartItemInfo
     */
    public function setProductExtId($productExtId = null)
    {
        // validation for constraint: string
        if (!is_null($productExtId) && !is_string($productExtId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productExtId)), __LINE__);
        }
        $this->productExtId = $productExtId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CartItemInfo
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
