<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shoppingCartResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ShoppingCartResponse extends AbstractStructBase
{
    /**
     * The cartItemInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CartItemInfo[]
     */
    public $cartItemInfo;
    /**
     * Constructor method for shoppingCartResponse
     * @uses ShoppingCartResponse::setCartItemInfo()
     * @param \Restoore\SystempayWebservice\StructType\CartItemInfo[] $cartItemInfo
     */
    public function __construct(array $cartItemInfo = array())
    {
        $this
            ->setCartItemInfo($cartItemInfo);
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
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartResponse
     */
    public function setCartItemInfo(array $cartItemInfo = array())
    {
        foreach ($cartItemInfo as $shoppingCartResponseCartItemInfoItem) {
            // validation for constraint: itemType
            if (!$shoppingCartResponseCartItemInfoItem instanceof \Restoore\SystempayWebservice\StructType\CartItemInfo) {
                throw new \InvalidArgumentException(sprintf('The cartItemInfo property can only contain items of \Restoore\SystempayWebservice\StructType\CartItemInfo, "%s" given', is_object($shoppingCartResponseCartItemInfoItem) ? get_class($shoppingCartResponseCartItemInfoItem) : gettype($shoppingCartResponseCartItemInfoItem)), __LINE__);
            }
        }
        $this->cartItemInfo = $cartItemInfo;
        return $this;
    }
    /**
     * Add item to cartItemInfo value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\CartItemInfo $item
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartResponse
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
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartResponse
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
