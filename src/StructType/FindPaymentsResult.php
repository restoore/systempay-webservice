<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPaymentsResult StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class FindPaymentsResult extends WsResponse
{
    /**
     * The commonResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public $commonResponse;
    /**
     * The orderResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\OrderResponse
     */
    public $orderResponse;
    /**
     * The transactionItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\TransactionItem[]
     */
    public $transactionItem;
    /**
     * Constructor method for findPaymentsResult
     * @uses FindPaymentsResult::setCommonResponse()
     * @uses FindPaymentsResult::setOrderResponse()
     * @uses FindPaymentsResult::setTransactionItem()
     * @param \Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse
     * @param \Restoore\SystempayWebservice\StructType\OrderResponse $orderResponse
     * @param \Restoore\SystempayWebservice\StructType\TransactionItem[] $transactionItem
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse = null, \Restoore\SystempayWebservice\StructType\OrderResponse $orderResponse = null, array $transactionItem = array())
    {
        $this
            ->setCommonResponse($commonResponse)
            ->setOrderResponse($orderResponse)
            ->setTransactionItem($transactionItem);
    }
    /**
     * Get commonResponse value
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse|null
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }
    /**
     * Set commonResponse value
     * @param \Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse
     * @return \Restoore\SystempayWebservice\StructType\FindPaymentsResult
     */
    public function setCommonResponse(\Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse = null)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }
    /**
     * Get orderResponse value
     * @return \Restoore\SystempayWebservice\StructType\OrderResponse|null
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }
    /**
     * Set orderResponse value
     * @param \Restoore\SystempayWebservice\StructType\OrderResponse $orderResponse
     * @return \Restoore\SystempayWebservice\StructType\FindPaymentsResult
     */
    public function setOrderResponse(\Restoore\SystempayWebservice\StructType\OrderResponse $orderResponse = null)
    {
        $this->orderResponse = $orderResponse;
        return $this;
    }
    /**
     * Get transactionItem value
     * @return \Restoore\SystempayWebservice\StructType\TransactionItem[]|null
     */
    public function getTransactionItem()
    {
        return $this->transactionItem;
    }
    /**
     * Set transactionItem value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\TransactionItem[] $transactionItem
     * @return \Restoore\SystempayWebservice\StructType\FindPaymentsResult
     */
    public function setTransactionItem(array $transactionItem = array())
    {
        foreach ($transactionItem as $findPaymentsResultTransactionItemItem) {
            // validation for constraint: itemType
            if (!$findPaymentsResultTransactionItemItem instanceof \Restoore\SystempayWebservice\StructType\TransactionItem) {
                throw new \InvalidArgumentException(sprintf('The transactionItem property can only contain items of \Restoore\SystempayWebservice\StructType\TransactionItem, "%s" given', is_object($findPaymentsResultTransactionItemItem) ? get_class($findPaymentsResultTransactionItemItem) : gettype($findPaymentsResultTransactionItemItem)), __LINE__);
            }
        }
        $this->transactionItem = $transactionItem;
        return $this;
    }
    /**
     * Add item to transactionItem value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\TransactionItem $item
     * @return \Restoore\SystempayWebservice\StructType\FindPaymentsResult
     */
    public function addToTransactionItem(\Restoore\SystempayWebservice\StructType\TransactionItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Restoore\SystempayWebservice\StructType\TransactionItem) {
            throw new \InvalidArgumentException(sprintf('The transactionItem property can only contain items of \Restoore\SystempayWebservice\StructType\TransactionItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->transactionItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\FindPaymentsResult
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
