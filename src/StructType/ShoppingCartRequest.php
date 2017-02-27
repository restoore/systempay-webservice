<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shoppingCartRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ShoppingCartRequest extends AbstractStructBase
{
    /**
     * The insuranceAmount
     * @var int
     */
    public $insuranceAmount;
    /**
     * The shippingAmount
     * @var int
     */
    public $shippingAmount;
    /**
     * The taxAmount
     * @var int
     */
    public $taxAmount;
    /**
     * The cartItemInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Restoore\SystempayWebservice\StructType\CartItemInfo[]
     */
    public $cartItemInfo;
    /**
     * Constructor method for shoppingCartRequest
     * @uses ShoppingCartRequest::setInsuranceAmount()
     * @uses ShoppingCartRequest::setShippingAmount()
     * @uses ShoppingCartRequest::setTaxAmount()
     * @uses ShoppingCartRequest::setCartItemInfo()
     * @param int $insuranceAmount
     * @param int $shippingAmount
     * @param int $taxAmount
     * @param \Restoore\SystempayWebservice\StructType\CartItemInfo[] $cartItemInfo
     */
    public function __construct($insuranceAmount = null, $shippingAmount = null, $taxAmount = null, array $cartItemInfo = array())
    {
        $this
            ->setInsuranceAmount($insuranceAmount)
            ->setShippingAmount($shippingAmount)
            ->setTaxAmount($taxAmount)
            ->setCartItemInfo($cartItemInfo);
    }
    /**
     * Get insuranceAmount value
     * @return int|null
     */
    public function getInsuranceAmount()
    {
        return $this->insuranceAmount;
    }
    /**
     * Set insuranceAmount value
     * @param int $insuranceAmount
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartRequest
     */
    public function setInsuranceAmount($insuranceAmount = null)
    {
        // validation for constraint: int
        if (!is_null($insuranceAmount) && !is_numeric($insuranceAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuranceAmount)), __LINE__);
        }
        $this->insuranceAmount = $insuranceAmount;
        return $this;
    }
    /**
     * Get shippingAmount value
     * @return int|null
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }
    /**
     * Set shippingAmount value
     * @param int $shippingAmount
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartRequest
     */
    public function setShippingAmount($shippingAmount = null)
    {
        // validation for constraint: int
        if (!is_null($shippingAmount) && !is_numeric($shippingAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingAmount)), __LINE__);
        }
        $this->shippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Get taxAmount value
     * @return int|null
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }
    /**
     * Set taxAmount value
     * @param int $taxAmount
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartRequest
     */
    public function setTaxAmount($taxAmount = null)
    {
        // validation for constraint: int
        if (!is_null($taxAmount) && !is_numeric($taxAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($taxAmount)), __LINE__);
        }
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get cartItemInfo value
     * @return \Restoore\SystempayWebservice\StructType\CartItemInfo[]|null
     */
    public function getCartItemInfo()
    {
        return $this->cartItemInfo;
    }
    /**
     * Set cartItemInfo value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\CartItemInfo[] $cartItemInfo
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartRequest
     */
    public function setCartItemInfo(array $cartItemInfo = array())
    {
        foreach ($cartItemInfo as $shoppingCartRequestCartItemInfoItem) {
            // validation for constraint: itemType
            if (!$shoppingCartRequestCartItemInfoItem instanceof \Restoore\SystempayWebservice\StructType\CartItemInfo) {
                throw new \InvalidArgumentException(sprintf('The cartItemInfo property can only contain items of \Restoore\SystempayWebservice\StructType\CartItemInfo, "%s" given', is_object($shoppingCartRequestCartItemInfoItem) ? get_class($shoppingCartRequestCartItemInfoItem) : gettype($shoppingCartRequestCartItemInfoItem)), __LINE__);
            }
        }
        $this->cartItemInfo = $cartItemInfo;
        return $this;
    }
    /**
     * Add item to cartItemInfo value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\CartItemInfo $item
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartRequest
     */
    public function addToCartItemInfo(\Restoore\SystempayWebservice\StructType\CartItemInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Restoore\SystempayWebservice\StructType\CartItemInfo) {
            throw new \InvalidArgumentException(sprintf('The cartItemInfo property can only contain items of \Restoore\SystempayWebservice\StructType\CartItemInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->cartItemInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartRequest
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
