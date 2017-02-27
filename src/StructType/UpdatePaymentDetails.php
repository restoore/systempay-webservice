<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updatePaymentDetails StructType
 * Meta informations extracted from the WSDL
 * - type: tns:updatePaymentDetails
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class UpdatePaymentDetails extends AbstractStructBase
{
    /**
     * The queryRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\QueryRequest
     */
    public $queryRequest;
    /**
     * The shoppingCartRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ShoppingCartRequest
     */
    public $shoppingCartRequest;
    /**
     * Constructor method for updatePaymentDetails
     * @uses UpdatePaymentDetails::setQueryRequest()
     * @uses UpdatePaymentDetails::setShoppingCartRequest()
     * @param \Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest
     * @param \Restoore\SystempayWebservice\StructType\ShoppingCartRequest $shoppingCartRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest = null, \Restoore\SystempayWebservice\StructType\ShoppingCartRequest $shoppingCartRequest = null)
    {
        $this
            ->setQueryRequest($queryRequest)
            ->setShoppingCartRequest($shoppingCartRequest);
    }
    /**
     * Get queryRequest value
     * @return \Restoore\SystempayWebservice\StructType\QueryRequest|null
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }
    /**
     * Set queryRequest value
     * @param \Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentDetails
     */
    public function setQueryRequest(\Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest = null)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }
    /**
     * Get shoppingCartRequest value
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartRequest|null
     */
    public function getShoppingCartRequest()
    {
        return $this->shoppingCartRequest;
    }
    /**
     * Set shoppingCartRequest value
     * @param \Restoore\SystempayWebservice\StructType\ShoppingCartRequest $shoppingCartRequest
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentDetails
     */
    public function setShoppingCartRequest(\Restoore\SystempayWebservice\StructType\ShoppingCartRequest $shoppingCartRequest = null)
    {
        $this->shoppingCartRequest = $shoppingCartRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\UpdatePaymentDetails
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
