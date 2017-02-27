<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for authenticationRequestData StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class AuthenticationRequestData extends AbstractStructBase
{
    /**
     * The threeDSAcctId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $threeDSAcctId;
    /**
     * The threeDSAcsUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $threeDSAcsUrl;
    /**
     * The threeDSBrand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $threeDSBrand;
    /**
     * The threeDSEncodedPareq
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $threeDSEncodedPareq;
    /**
     * The threeDSEnrolled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $threeDSEnrolled;
    /**
     * The threeDSRequestId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $threeDSRequestId;
    /**
     * Constructor method for authenticationRequestData
     * @uses AuthenticationRequestData::setThreeDSAcctId()
     * @uses AuthenticationRequestData::setThreeDSAcsUrl()
     * @uses AuthenticationRequestData::setThreeDSBrand()
     * @uses AuthenticationRequestData::setThreeDSEncodedPareq()
     * @uses AuthenticationRequestData::setThreeDSEnrolled()
     * @uses AuthenticationRequestData::setThreeDSRequestId()
     * @param string $threeDSAcctId
     * @param string $threeDSAcsUrl
     * @param string $threeDSBrand
     * @param string $threeDSEncodedPareq
     * @param string $threeDSEnrolled
     * @param string $threeDSRequestId
     */
    public function __construct($threeDSAcctId = null, $threeDSAcsUrl = null, $threeDSBrand = null, $threeDSEncodedPareq = null, $threeDSEnrolled = null, $threeDSRequestId = null)
    {
        $this
            ->setThreeDSAcctId($threeDSAcctId)
            ->setThreeDSAcsUrl($threeDSAcsUrl)
            ->setThreeDSBrand($threeDSBrand)
            ->setThreeDSEncodedPareq($threeDSEncodedPareq)
            ->setThreeDSEnrolled($threeDSEnrolled)
            ->setThreeDSRequestId($threeDSRequestId);
    }
    /**
     * Get threeDSAcctId value
     * @return string|null
     */
    public function getThreeDSAcctId()
    {
        return $this->threeDSAcctId;
    }
    /**
     * Set threeDSAcctId value
     * @param string $threeDSAcctId
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationRequestData
     */
    public function setThreeDSAcctId($threeDSAcctId = null)
    {
        // validation for constraint: string
        if (!is_null($threeDSAcctId) && !is_string($threeDSAcctId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($threeDSAcctId)), __LINE__);
        }
        $this->threeDSAcctId = $threeDSAcctId;
        return $this;
    }
    /**
     * Get threeDSAcsUrl value
     * @return string|null
     */
    public function getThreeDSAcsUrl()
    {
        return $this->threeDSAcsUrl;
    }
    /**
     * Set threeDSAcsUrl value
     * @param string $threeDSAcsUrl
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationRequestData
     */
    public function setThreeDSAcsUrl($threeDSAcsUrl = null)
    {
        // validation for constraint: string
        if (!is_null($threeDSAcsUrl) && !is_string($threeDSAcsUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($threeDSAcsUrl)), __LINE__);
        }
        $this->threeDSAcsUrl = $threeDSAcsUrl;
        return $this;
    }
    /**
     * Get threeDSBrand value
     * @return string|null
     */
    public function getThreeDSBrand()
    {
        return $this->threeDSBrand;
    }
    /**
     * Set threeDSBrand value
     * @param string $threeDSBrand
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationRequestData
     */
    public function setThreeDSBrand($threeDSBrand = null)
    {
        // validation for constraint: string
        if (!is_null($threeDSBrand) && !is_string($threeDSBrand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($threeDSBrand)), __LINE__);
        }
        $this->threeDSBrand = $threeDSBrand;
        return $this;
    }
    /**
     * Get threeDSEncodedPareq value
     * @return string|null
     */
    public function getThreeDSEncodedPareq()
    {
        return $this->threeDSEncodedPareq;
    }
    /**
     * Set threeDSEncodedPareq value
     * @param string $threeDSEncodedPareq
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationRequestData
     */
    public function setThreeDSEncodedPareq($threeDSEncodedPareq = null)
    {
        // validation for constraint: string
        if (!is_null($threeDSEncodedPareq) && !is_string($threeDSEncodedPareq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($threeDSEncodedPareq)), __LINE__);
        }
        $this->threeDSEncodedPareq = $threeDSEncodedPareq;
        return $this;
    }
    /**
     * Get threeDSEnrolled value
     * @return string|null
     */
    public function getThreeDSEnrolled()
    {
        return $this->threeDSEnrolled;
    }
    /**
     * Set threeDSEnrolled value
     * @param string $threeDSEnrolled
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationRequestData
     */
    public function setThreeDSEnrolled($threeDSEnrolled = null)
    {
        // validation for constraint: string
        if (!is_null($threeDSEnrolled) && !is_string($threeDSEnrolled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($threeDSEnrolled)), __LINE__);
        }
        $this->threeDSEnrolled = $threeDSEnrolled;
        return $this;
    }
    /**
     * Get threeDSRequestId value
     * @return string|null
     */
    public function getThreeDSRequestId()
    {
        return $this->threeDSRequestId;
    }
    /**
     * Set threeDSRequestId value
     * @param string $threeDSRequestId
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationRequestData
     */
    public function setThreeDSRequestId($threeDSRequestId = null)
    {
        // validation for constraint: string
        if (!is_null($threeDSRequestId) && !is_string($threeDSRequestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($threeDSRequestId)), __LINE__);
        }
        $this->threeDSRequestId = $threeDSRequestId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationRequestData
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
