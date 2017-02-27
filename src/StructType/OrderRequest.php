<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class OrderRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var string
     */
    public $orderId;
    /**
     * The extInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ExtInfo[]
     */
    public $extInfo;
    /**
     * Constructor method for orderRequest
     * @uses OrderRequest::setOrderId()
     * @uses OrderRequest::setExtInfo()
     * @param string $orderId
     * @param \Restoore\SystempayWebservice\StructType\ExtInfo[] $extInfo
     */
    public function __construct($orderId = null, array $extInfo = array())
    {
        $this
            ->setOrderId($orderId)
            ->setExtInfo($extInfo);
    }
    /**
     * Get orderId value
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param string $orderId
     * @return \Restoore\SystempayWebservice\StructType\OrderRequest
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: string
        if (!is_null($orderId) && !is_string($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Get extInfo value
     * @return \Restoore\SystempayWebservice\StructType\ExtInfo[]|null
     */
    public function getExtInfo()
    {
        return $this->extInfo;
    }
    /**
     * Set extInfo value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\ExtInfo[] $extInfo
     * @return \Restoore\SystempayWebservice\StructType\OrderRequest
     */
    public function setExtInfo(array $extInfo = array())
    {
        foreach ($extInfo as $orderRequestExtInfoItem) {
            // validation for constraint: itemType
            if (!$orderRequestExtInfoItem instanceof \Restoore\SystempayWebservice\StructType\ExtInfo) {
                throw new \InvalidArgumentException(sprintf('The extInfo property can only contain items of \Restoore\SystempayWebservice\StructType\ExtInfo, "%s" given', is_object($orderRequestExtInfoItem) ? get_class($orderRequestExtInfoItem) : gettype($orderRequestExtInfoItem)), __LINE__);
            }
        }
        $this->extInfo = $extInfo;
        return $this;
    }
    /**
     * Add item to extInfo value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\ExtInfo $item
     * @return \Restoore\SystempayWebservice\StructType\OrderRequest
     */
    public function addToExtInfo(\Restoore\SystempayWebservice\StructType\ExtInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Restoore\SystempayWebservice\StructType\ExtInfo) {
            throw new \InvalidArgumentException(sprintf('The extInfo property can only contain items of \Restoore\SystempayWebservice\StructType\ExtInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->extInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\OrderRequest
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
