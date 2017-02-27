<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPayment StructType
 * Meta informations extracted from the WSDL
 * - type: tns:createPayment
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CreatePayment extends AbstractStructBase
{
    /**
     * The commonRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonRequest
     */
    public $commonRequest;
    /**
     * The threeDSRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ThreeDSRequest
     */
    public $threeDSRequest;
    /**
     * The paymentRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\PaymentRequest
     */
    public $paymentRequest;
    /**
     * The orderRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\OrderRequest
     */
    public $orderRequest;
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
     * The techRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\TechRequest
     */
    public $techRequest;
    /**
     * The shoppingCartRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ShoppingCartRequest
     */
    public $shoppingCartRequest;
    /**
     * Constructor method for createPayment
     * @uses CreatePayment::setCommonRequest()
     * @uses CreatePayment::setThreeDSRequest()
     * @uses CreatePayment::setPaymentRequest()
     * @uses CreatePayment::setOrderRequest()
     * @uses CreatePayment::setCardRequest()
     * @uses CreatePayment::setCustomerRequest()
     * @uses CreatePayment::setTechRequest()
     * @uses CreatePayment::setShoppingCartRequest()
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @param \Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest
     * @param \Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest
     * @param \Restoore\SystempayWebservice\StructType\OrderRequest $orderRequest
     * @param \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest
     * @param \Restoore\SystempayWebservice\StructType\CustomerRequest $customerRequest
     * @param \Restoore\SystempayWebservice\StructType\TechRequest $techRequest
     * @param \Restoore\SystempayWebservice\StructType\ShoppingCartRequest $shoppingCartRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null, \Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest = null, \Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest = null, \Restoore\SystempayWebservice\StructType\OrderRequest $orderRequest = null, \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest = null, \Restoore\SystempayWebservice\StructType\CustomerRequest $customerRequest = null, \Restoore\SystempayWebservice\StructType\TechRequest $techRequest = null, \Restoore\SystempayWebservice\StructType\ShoppingCartRequest $shoppingCartRequest = null)
    {
        $this
            ->setCommonRequest($commonRequest)
            ->setThreeDSRequest($threeDSRequest)
            ->setPaymentRequest($paymentRequest)
            ->setOrderRequest($orderRequest)
            ->setCardRequest($cardRequest)
            ->setCustomerRequest($customerRequest)
            ->setTechRequest($techRequest)
            ->setShoppingCartRequest($shoppingCartRequest);
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
     * @return \Restoore\SystempayWebservice\StructType\CreatePayment
     */
    public function setCommonRequest(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }
    /**
     * Get threeDSRequest value
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest|null
     */
    public function getThreeDSRequest()
    {
        return $this->threeDSRequest;
    }
    /**
     * Set threeDSRequest value
     * @param \Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest
     * @return \Restoore\SystempayWebservice\StructType\CreatePayment
     */
    public function setThreeDSRequest(\Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest = null)
    {
        $this->threeDSRequest = $threeDSRequest;
        return $this;
    }
    /**
     * Get paymentRequest value
     * @return \Restoore\SystempayWebservice\StructType\PaymentRequest|null
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }
    /**
     * Set paymentRequest value
     * @param \Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest
     * @return \Restoore\SystempayWebservice\StructType\CreatePayment
     */
    public function setPaymentRequest(\Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest = null)
    {
        $this->paymentRequest = $paymentRequest;
        return $this;
    }
    /**
     * Get orderRequest value
     * @return \Restoore\SystempayWebservice\StructType\OrderRequest|null
     */
    public function getOrderRequest()
    {
        return $this->orderRequest;
    }
    /**
     * Set orderRequest value
     * @param \Restoore\SystempayWebservice\StructType\OrderRequest $orderRequest
     * @return \Restoore\SystempayWebservice\StructType\CreatePayment
     */
    public function setOrderRequest(\Restoore\SystempayWebservice\StructType\OrderRequest $orderRequest = null)
    {
        $this->orderRequest = $orderRequest;
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
     * @return \Restoore\SystempayWebservice\StructType\CreatePayment
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
     * @return \Restoore\SystempayWebservice\StructType\CreatePayment
     */
    public function setCustomerRequest(\Restoore\SystempayWebservice\StructType\CustomerRequest $customerRequest = null)
    {
        $this->customerRequest = $customerRequest;
        return $this;
    }
    /**
     * Get techRequest value
     * @return \Restoore\SystempayWebservice\StructType\TechRequest|null
     */
    public function getTechRequest()
    {
        return $this->techRequest;
    }
    /**
     * Set techRequest value
     * @param \Restoore\SystempayWebservice\StructType\TechRequest $techRequest
     * @return \Restoore\SystempayWebservice\StructType\CreatePayment
     */
    public function setTechRequest(\Restoore\SystempayWebservice\StructType\TechRequest $techRequest = null)
    {
        $this->techRequest = $techRequest;
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
     * @return \Restoore\SystempayWebservice\StructType\CreatePayment
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
     * @return \Restoore\SystempayWebservice\StructType\CreatePayment
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
