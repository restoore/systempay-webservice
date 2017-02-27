<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for legacyTransactionKeyResult StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class LegacyTransactionKeyResult extends WsResponse
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
     * Constructor method for legacyTransactionKeyResult
     * @uses LegacyTransactionKeyResult::setCommonResponse()
     * @uses LegacyTransactionKeyResult::setPaymentResponse()
     * @param \Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse
     * @param \Restoore\SystempayWebservice\StructType\PaymentResponse $paymentResponse
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonResponse $commonResponse = null, \Restoore\SystempayWebservice\StructType\PaymentResponse $paymentResponse = null)
    {
        $this
            ->setCommonResponse($commonResponse)
            ->setPaymentResponse($paymentResponse);
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
     * @return \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyResult
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
     * @return \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyResult
     */
    public function setPaymentResponse(\Restoore\SystempayWebservice\StructType\PaymentResponse $paymentResponse = null)
    {
        $this->paymentResponse = $paymentResponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyResult
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
