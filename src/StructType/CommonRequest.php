<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for commonRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CommonRequest extends AbstractStructBase
{
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
     * The comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $comment;
    /**
     * Constructor method for commonRequest
     * @uses CommonRequest::setPaymentSource()
     * @uses CommonRequest::setSubmissionDate()
     * @uses CommonRequest::setContractNumber()
     * @uses CommonRequest::setComment()
     * @param string $paymentSource
     * @param string $submissionDate
     * @param string $contractNumber
     * @param string $comment
     */
    public function __construct($paymentSource = null, $submissionDate = null, $contractNumber = null, $comment = null)
    {
        $this
            ->setPaymentSource($paymentSource)
            ->setSubmissionDate($submissionDate)
            ->setContractNumber($contractNumber)
            ->setComment($comment);
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
     * @return \Restoore\SystempayWebservice\StructType\CommonRequest
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
     * @return \Restoore\SystempayWebservice\StructType\CommonRequest
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
     * @return \Restoore\SystempayWebservice\StructType\CommonRequest
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
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Restoore\SystempayWebservice\StructType\CommonRequest
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CommonRequest
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
