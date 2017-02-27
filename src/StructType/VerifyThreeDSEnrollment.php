<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for verifyThreeDSEnrollment StructType
 * Meta informations extracted from the WSDL
 * - type: tns:verifyThreeDSEnrollment
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class VerifyThreeDSEnrollment extends AbstractStructBase
{
    /**
     * The commonRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonRequest
     */
    public $commonRequest;
    /**
     * The paymentRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\PaymentRequest
     */
    public $paymentRequest;
    /**
     * The cardRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CardRequest
     */
    public $cardRequest;
    /**
     * The techRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\TechRequest
     */
    public $techRequest;
    /**
     * The threeDSRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ThreeDSRequest
     */
    public $threeDSRequest;
    /**
     * Constructor method for verifyThreeDSEnrollment
     * @uses VerifyThreeDSEnrollment::setCommonRequest()
     * @uses VerifyThreeDSEnrollment::setPaymentRequest()
     * @uses VerifyThreeDSEnrollment::setCardRequest()
     * @uses VerifyThreeDSEnrollment::setTechRequest()
     * @uses VerifyThreeDSEnrollment::setThreeDSRequest()
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @param \Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest
     * @param \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest
     * @param \Restoore\SystempayWebservice\StructType\TechRequest $techRequest
     * @param \Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null, \Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest = null, \Restoore\SystempayWebservice\StructType\CardRequest $cardRequest = null, \Restoore\SystempayWebservice\StructType\TechRequest $techRequest = null, \Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest = null)
    {
        $this
            ->setCommonRequest($commonRequest)
            ->setPaymentRequest($paymentRequest)
            ->setCardRequest($cardRequest)
            ->setTechRequest($techRequest)
            ->setThreeDSRequest($threeDSRequest);
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
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollment
     */
    public function setCommonRequest(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null)
    {
        $this->commonRequest = $commonRequest;
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
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollment
     */
    public function setPaymentRequest(\Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest = null)
    {
        $this->paymentRequest = $paymentRequest;
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
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollment
     */
    public function setCardRequest(\Restoore\SystempayWebservice\StructType\CardRequest $cardRequest = null)
    {
        $this->cardRequest = $cardRequest;
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
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollment
     */
    public function setTechRequest(\Restoore\SystempayWebservice\StructType\TechRequest $techRequest = null)
    {
        $this->techRequest = $techRequest;
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
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollment
     */
    public function setThreeDSRequest(\Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest = null)
    {
        $this->threeDSRequest = $threeDSRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\VerifyThreeDSEnrollment
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
