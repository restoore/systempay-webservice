<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateToken StructType
 * Meta informations extracted from the WSDL
 * - type: tns:updateToken
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class UpdateToken extends AbstractStructBase
{
    /**
     * The commonRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonRequest
     */
    public $commonRequest;
    /**
     * The queryRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\QueryRequest
     */
    public $queryRequest;
    /**
     * The cardRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CardRequest
     */
    public $cardRequest;
    /**
     * The customerRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CustomerRequest
     */
    public $customerRequest;
    /**
     * Constructor method for updateToken
     * @uses UpdateToken::setCommonRequest()
     * @uses UpdateToken::setQueryRequest()
     * @uses UpdateToken::setCardRequest()
     * @uses UpdateToken::setCustomerRequest()
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @param \Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest
     * @param \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest
     * @param \Restoore\SystempayWebservice\StructType\CustomerRequest $customerRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null, \Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest = null, \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest = null, \Restoore\SystempayWebservice\StructType\CustomerRequest $customerRequest = null)
    {
        $this
            ->setCommonRequest($commonRequest)
            ->setQueryRequest($queryRequest)
            ->setCardRequest($cardRequest)
            ->setCustomerRequest($customerRequest);
    }
    /**
     * Get commonRequest value
     * @return \Restoore\SystempayWebservice\StructType\CommonRequest|null
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }
    /**
     * Set commonRequest value
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @return \Restoore\SystempayWebservice\StructType\UpdateToken
     */
    public function setCommonRequest(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null)
    {
        $this->commonRequest = $commonRequest;
        return $this;
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
     * @return \Restoore\SystempayWebservice\StructType\UpdateToken
     */
    public function setQueryRequest(\Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest = null)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }
    /**
     * Get cardRequest value
     * @return \Restoore\SystempayWebservice\StructType\CardRequest|null
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }
    /**
     * Set cardRequest value
     * @param \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest
     * @return \Restoore\SystempayWebservice\StructType\UpdateToken
     */
    public function setCardRequest(\Restoore\SystempayWebservice\StructType\CardRequest $cardRequest = null)
    {
        $this->cardRequest = $cardRequest;
        return $this;
    }
    /**
     * Get customerRequest value
     * @return \Restoore\SystempayWebservice\StructType\CustomerRequest|null
     */
    public function getCustomerRequest()
    {
        return $this->customerRequest;
    }
    /**
     * Set customerRequest value
     * @param \Restoore\SystempayWebservice\StructType\CustomerRequest $customerRequest
     * @return \Restoore\SystempayWebservice\StructType\UpdateToken
     */
    public function setCustomerRequest(\Restoore\SystempayWebservice\StructType\CustomerRequest $customerRequest = null)
    {
        $this->customerRequest = $customerRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\UpdateToken
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
