<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createPaymentResult StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CreatePaymentResult extends WsResponse
{
    /**
     * The commonResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public $commonResponse;
    /**
     * The paymentResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\PaymentResponse
     */
    public $paymentResponse;
    /**
     * The orderResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\OrderResponse
     */
    public $orderResponse;
    /**
     * The cardResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CardResponse
     */
    public $cardResponse;
    /**
     * The authorizationResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\AuthorizationResponse
     */
    public $authorizationResponse;
    /**
     * The captureResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CaptureResponse
     */
    public $captureResponse;
    /**
     * The customerResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CustomerResponse
     */
    public $customerResponse;
    /**
     * The markResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\MarkResponse
     */
    public $markResponse;
    /**
     * The threeDSResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ThreeDSResponse
     */
    public $threeDSResponse;
    /**
     * The extraResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ExtraResponse
     */
    public $extraResponse;
    /**
     * The subscriptionResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\SubscriptionResponse
     */
    public $subscriptionResponse;
    /**
     * The fraudManagementResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\FraudManagementResponse
     */
    public $fraudManagementResponse;
    /**
     * The shoppingCartResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ShoppingCartResponse
     */
    public $shoppingCartResponse;
    /**
     * Constructor method for createPaymentResult
     * @uses CreatePaymentResult::setCommonResponse()
     * @uses CreatePaymentResult::setPaymentResponse()
     * @uses CreatePaymentResult::setOrderResponse()
     * @uses CreatePaymentResult::setCardResponse()
     * @uses CreatePaymentResult::setAuthorizationResponse()
     * @uses CreatePaymentResult::setCaptureResponse()
     * @uses CreatePaymentResult::setCustomerResponse()
     * @uses CreatePaymentResult::setMarkResponse()
     * @uses CreatePaymentResult::setThreeDSResponse()
     * @uses CreatePaymentResult::setExtraResponse()
     * @uses CreatePaymentResult::setSubscriptionResponse()
     * @uses CreatePaymentResult::setFraudManagementResponse()
     * @uses CreatePaymentResult::setShoppingCartResponse()
     * @param \Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse
     * @param \Restoore\SystempayWebservice\StructType\PaymentResponse $paymentResponse
     * @param \Restoore\SystempayWebservice\StructType\OrderResponse $orderResponse
     * @param \Restoore\SystempayWebservice\StructType\CardResponse $cardResponse
     * @param \Restoore\SystempayWebservice\StructType\AuthorizationResponse $authorizationResponse
     * @param \Restoore\SystempayWebservice\StructType\CaptureResponse $captureResponse
     * @param \Restoore\SystempayWebservice\StructType\CustomerResponse $customerResponse
     * @param \Restoore\SystempayWebservice\StructType\MarkResponse $markResponse
     * @param \Restoore\SystempayWebservice\StructType\ThreeDSResponse $threeDSResponse
     * @param \Restoore\SystempayWebservice\StructType\ExtraResponse $extraResponse
     * @param \Restoore\SystempayWebservice\StructType\SubscriptionResponse $subscriptionResponse
     * @param \Restoore\SystempayWebservice\StructType\FraudManagementResponse $fraudManagementResponse
     * @param \Restoore\SystempayWebservice\StructType\ShoppingCartResponse $shoppingCartResponse
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse = null, \Restoore\SystempayWebservice\StructType\PaymentResponse $paymentResponse = null, \Restoore\SystempayWebservice\StructType\OrderResponse $orderResponse = null, \Restoore\SystempayWebservice\StructType\CardResponse $cardResponse = null, \Restoore\SystempayWebservice\StructType\AuthorizationResponse $authorizationResponse = null, \Restoore\SystempayWebservice\StructType\CaptureResponse $captureResponse = null, \Restoore\SystempayWebservice\StructType\CustomerResponse $customerResponse = null, \Restoore\SystempayWebservice\StructType\MarkResponse $markResponse = null, \Restoore\SystempayWebservice\StructType\ThreeDSResponse $threeDSResponse = null, \Restoore\SystempayWebservice\StructType\ExtraResponse $extraResponse = null, \Restoore\SystempayWebservice\StructType\SubscriptionResponse $subscriptionResponse = null, \Restoore\SystempayWebservice\StructType\FraudManagementResponse $fraudManagementResponse = null, \Restoore\SystempayWebservice\StructType\ShoppingCartResponse $shoppingCartResponse = null)
    {
        $this
            ->setCommonResponse($commonResponse)
            ->setPaymentResponse($paymentResponse)
            ->setOrderResponse($orderResponse)
            ->setCardResponse($cardResponse)
            ->setAuthorizationResponse($authorizationResponse)
            ->setCaptureResponse($captureResponse)
            ->setCustomerResponse($customerResponse)
            ->setMarkResponse($markResponse)
            ->setThreeDSResponse($threeDSResponse)
            ->setExtraResponse($extraResponse)
            ->setSubscriptionResponse($subscriptionResponse)
            ->setFraudManagementResponse($fraudManagementResponse)
            ->setShoppingCartResponse($shoppingCartResponse);
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
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setCommonResponse(\Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse = null)
    {
        $this->commonResponse = $commonResponse;
        return $this;
    }
    /**
     * Get paymentResponse value
     * @return \Restoore\SystempayWebservice\StructType\PaymentResponse|null
     */
    public function getPaymentResponse()
    {
        return $this->paymentResponse;
    }
    /**
     * Set paymentResponse value
     * @param \Restoore\SystempayWebservice\StructType\PaymentResponse $paymentResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setPaymentResponse(\Restoore\SystempayWebservice\StructType\PaymentResponse $paymentResponse = null)
    {
        $this->paymentResponse = $paymentResponse;
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
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setOrderResponse(\Restoore\SystempayWebservice\StructType\OrderResponse $orderResponse = null)
    {
        $this->orderResponse = $orderResponse;
        return $this;
    }
    /**
     * Get cardResponse value
     * @return \Restoore\SystempayWebservice\StructType\CardResponse|null
     */
    public function getCardResponse()
    {
        return $this->cardResponse;
    }
    /**
     * Set cardResponse value
     * @param \Restoore\SystempayWebservice\StructType\CardResponse $cardResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setCardResponse(\Restoore\SystempayWebservice\StructType\CardResponse $cardResponse = null)
    {
        $this->cardResponse = $cardResponse;
        return $this;
    }
    /**
     * Get authorizationResponse value
     * @return \Restoore\SystempayWebservice\StructType\AuthorizationResponse|null
     */
    public function getAuthorizationResponse()
    {
        return $this->authorizationResponse;
    }
    /**
     * Set authorizationResponse value
     * @param \Restoore\SystempayWebservice\StructType\AuthorizationResponse $authorizationResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setAuthorizationResponse(\Restoore\SystempayWebservice\StructType\AuthorizationResponse $authorizationResponse = null)
    {
        $this->authorizationResponse = $authorizationResponse;
        return $this;
    }
    /**
     * Get captureResponse value
     * @return \Restoore\SystempayWebservice\StructType\CaptureResponse|null
     */
    public function getCaptureResponse()
    {
        return $this->captureResponse;
    }
    /**
     * Set captureResponse value
     * @param \Restoore\SystempayWebservice\StructType\CaptureResponse $captureResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setCaptureResponse(\Restoore\SystempayWebservice\StructType\CaptureResponse $captureResponse = null)
    {
        $this->captureResponse = $captureResponse;
        return $this;
    }
    /**
     * Get customerResponse value
     * @return \Restoore\SystempayWebservice\StructType\CustomerResponse|null
     */
    public function getCustomerResponse()
    {
        return $this->customerResponse;
    }
    /**
     * Set customerResponse value
     * @param \Restoore\SystempayWebservice\StructType\CustomerResponse $customerResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setCustomerResponse(\Restoore\SystempayWebservice\StructType\CustomerResponse $customerResponse = null)
    {
        $this->customerResponse = $customerResponse;
        return $this;
    }
    /**
     * Get markResponse value
     * @return \Restoore\SystempayWebservice\StructType\MarkResponse|null
     */
    public function getMarkResponse()
    {
        return $this->markResponse;
    }
    /**
     * Set markResponse value
     * @param \Restoore\SystempayWebservice\StructType\MarkResponse $markResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setMarkResponse(\Restoore\SystempayWebservice\StructType\MarkResponse $markResponse = null)
    {
        $this->markResponse = $markResponse;
        return $this;
    }
    /**
     * Get threeDSResponse value
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSResponse|null
     */
    public function getThreeDSResponse()
    {
        return $this->threeDSResponse;
    }
    /**
     * Set threeDSResponse value
     * @param \Restoore\SystempayWebservice\StructType\ThreeDSResponse $threeDSResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setThreeDSResponse(\Restoore\SystempayWebservice\StructType\ThreeDSResponse $threeDSResponse = null)
    {
        $this->threeDSResponse = $threeDSResponse;
        return $this;
    }
    /**
     * Get extraResponse value
     * @return \Restoore\SystempayWebservice\StructType\ExtraResponse|null
     */
    public function getExtraResponse()
    {
        return $this->extraResponse;
    }
    /**
     * Set extraResponse value
     * @param \Restoore\SystempayWebservice\StructType\ExtraResponse $extraResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setExtraResponse(\Restoore\SystempayWebservice\StructType\ExtraResponse $extraResponse = null)
    {
        $this->extraResponse = $extraResponse;
        return $this;
    }
    /**
     * Get subscriptionResponse value
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionResponse|null
     */
    public function getSubscriptionResponse()
    {
        return $this->subscriptionResponse;
    }
    /**
     * Set subscriptionResponse value
     * @param \Restoore\SystempayWebservice\StructType\SubscriptionResponse $subscriptionResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setSubscriptionResponse(\Restoore\SystempayWebservice\StructType\SubscriptionResponse $subscriptionResponse = null)
    {
        $this->subscriptionResponse = $subscriptionResponse;
        return $this;
    }
    /**
     * Get fraudManagementResponse value
     * @return \Restoore\SystempayWebservice\StructType\FraudManagementResponse|null
     */
    public function getFraudManagementResponse()
    {
        return $this->fraudManagementResponse;
    }
    /**
     * Set fraudManagementResponse value
     * @param \Restoore\SystempayWebservice\StructType\FraudManagementResponse $fraudManagementResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setFraudManagementResponse(\Restoore\SystempayWebservice\StructType\FraudManagementResponse $fraudManagementResponse = null)
    {
        $this->fraudManagementResponse = $fraudManagementResponse;
        return $this;
    }
    /**
     * Get shoppingCartResponse value
     * @return \Restoore\SystempayWebservice\StructType\ShoppingCartResponse|null
     */
    public function getShoppingCartResponse()
    {
        return $this->shoppingCartResponse;
    }
    /**
     * Set shoppingCartResponse value
     * @param \Restoore\SystempayWebservice\StructType\ShoppingCartResponse $shoppingCartResponse
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
     */
    public function setShoppingCartResponse(\Restoore\SystempayWebservice\StructType\ShoppingCartResponse $shoppingCartResponse = null)
    {
        $this->shoppingCartResponse = $shoppingCartResponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CreatePaymentResult
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
