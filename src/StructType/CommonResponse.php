<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for commonResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CommonResponse extends AbstractStructBase
{
    /**
     * The responseCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $responseCode;
    /**
     * The responseCodeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $responseCodeDetail;
    /**
     * The transactionStatusLabel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionStatusLabel;
    /**
     * The shopId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shopId;
    /**
     * The paymentSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentSource;
    /**
     * The submissionDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $submissionDate;
    /**
     * The contractNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contractNumber;
    /**
     * The paymentToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $paymentToken;
    /**
     * Constructor method for commonResponse
     * @uses CommonResponse::setResponseCode()
     * @uses CommonResponse::setResponseCodeDetail()
     * @uses CommonResponse::setTransactionStatusLabel()
     * @uses CommonResponse::setShopId()
     * @uses CommonResponse::setPaymentSource()
     * @uses CommonResponse::setSubmissionDate()
     * @uses CommonResponse::setContractNumber()
     * @uses CommonResponse::setPaymentToken()
     * @param int $responseCode
     * @param string $responseCodeDetail
     * @param string $transactionStatusLabel
     * @param string $shopId
     * @param string $paymentSource
     * @param string $submissionDate
     * @param string $contractNumber
     * @param string $paymentToken
     */
    public function __construct($responseCode = null, $responseCodeDetail = null, $transactionStatusLabel = null, $shopId = null, $paymentSource = null, $submissionDate = null, $contractNumber = null, $paymentToken = null)
    {
        $this
            ->setResponseCode($responseCode)
            ->setResponseCodeDetail($responseCodeDetail)
            ->setTransactionStatusLabel($transactionStatusLabel)
            ->setShopId($shopId)
            ->setPaymentSource($paymentSource)
            ->setSubmissionDate($submissionDate)
            ->setContractNumber($contractNumber)
            ->setPaymentToken($paymentToken);
    }
    /**
     * Get responseCode value
     * @return int|null
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }
    /**
     * Set responseCode value
     * @param int $responseCode
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public function setResponseCode($responseCode = null)
    {
        // validation for constraint: int
        if (!is_null($responseCode) && !is_numeric($responseCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($responseCode)), __LINE__);
        }
        $this->responseCode = $responseCode;
        return $this;
    }
    /**
     * Get responseCodeDetail value
     * @return string|null
     */
    public function getResponseCodeDetail()
    {
        return $this->responseCodeDetail;
    }
    /**
     * Set responseCodeDetail value
     * @param string $responseCodeDetail
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public function setResponseCodeDetail($responseCodeDetail = null)
    {
        // validation for constraint: string
        if (!is_null($responseCodeDetail) && !is_string($responseCodeDetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseCodeDetail)), __LINE__);
        }
        $this->responseCodeDetail = $responseCodeDetail;
        return $this;
    }
    /**
     * Get transactionStatusLabel value
     * @return string|null
     */
    public function getTransactionStatusLabel()
    {
        return $this->transactionStatusLabel;
    }
    /**
     * Set transactionStatusLabel value
     * @param string $transactionStatusLabel
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public function setTransactionStatusLabel($transactionStatusLabel = null)
    {
        // validation for constraint: string
        if (!is_null($transactionStatusLabel) && !is_string($transactionStatusLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionStatusLabel)), __LINE__);
        }
        $this->transactionStatusLabel = $transactionStatusLabel;
        return $this;
    }
    /**
     * Get shopId value
     * @return string|null
     */
    public function getShopId()
    {
        return $this->shopId;
    }
    /**
     * Set shopId value
     * @param string $shopId
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public function setShopId($shopId = null)
    {
        // validation for constraint: string
        if (!is_null($shopId) && !is_string($shopId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shopId)), __LINE__);
        }
        $this->shopId = $shopId;
        return $this;
    }
    /**
     * Get paymentSource value
     * @return string|null
     */
    public function getPaymentSource()
    {
        return $this->paymentSource;
    }
    /**
     * Set paymentSource value
     * @param string $paymentSource
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public function setPaymentSource($paymentSource = null)
    {
        // validation for constraint: string
        if (!is_null($paymentSource) && !is_string($paymentSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentSource)), __LINE__);
        }
        $this->paymentSource = $paymentSource;
        return $this;
    }
    /**
     * Get submissionDate value
     * @return string|null
     */
    public function getSubmissionDate()
    {
        return $this->submissionDate;
    }
    /**
     * Set submissionDate value
     * @param string $submissionDate
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public function setSubmissionDate($submissionDate = null)
    {
        // validation for constraint: string
        if (!is_null($submissionDate) && !is_string($submissionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($submissionDate)), __LINE__);
        }
        $this->submissionDate = $submissionDate;
        return $this;
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public function setContractNumber($contractNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        return $this;
    }
    /**
     * Get paymentToken value
     * @return string|null
     */
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }
    /**
     * Set paymentToken value
     * @param string $paymentToken
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse
     */
    public function setPaymentToken($paymentToken = null)
    {
        // validation for constraint: string
        if (!is_null($paymentToken) && !is_string($paymentToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentToken)), __LINE__);
        }
        $this->paymentToken = $paymentToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CommonResponse
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
