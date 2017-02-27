<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for authenticationResultData StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class AuthenticationResultData extends AbstractStructBase
{
    /**
     * The brand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $brand;
    /**
     * The enrolled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $enrolled;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The eci
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eci;
    /**
     * The xid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $xid;
    /**
     * The cavv
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cavv;
    /**
     * The cavvAlgorithm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cavvAlgorithm;
    /**
     * The signValid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $signValid;
    /**
     * The transactionCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionCondition;
    /**
     * Constructor method for authenticationResultData
     * @uses AuthenticationResultData::setBrand()
     * @uses AuthenticationResultData::setEnrolled()
     * @uses AuthenticationResultData::setStatus()
     * @uses AuthenticationResultData::setEci()
     * @uses AuthenticationResultData::setXid()
     * @uses AuthenticationResultData::setCavv()
     * @uses AuthenticationResultData::setCavvAlgorithm()
     * @uses AuthenticationResultData::setSignValid()
     * @uses AuthenticationResultData::setTransactionCondition()
     * @param string $brand
     * @param string $enrolled
     * @param string $status
     * @param string $eci
     * @param string $xid
     * @param string $cavv
     * @param string $cavvAlgorithm
     * @param string $signValid
     * @param string $transactionCondition
     */
    public function __construct($brand = null, $enrolled = null, $status = null, $eci = null, $xid = null, $cavv = null, $cavvAlgorithm = null, $signValid = null, $transactionCondition = null)
    {
        $this
            ->setBrand($brand)
            ->setEnrolled($enrolled)
            ->setStatus($status)
            ->setEci($eci)
            ->setXid($xid)
            ->setCavv($cavv)
            ->setCavvAlgorithm($cavvAlgorithm)
            ->setSignValid($signValid)
            ->setTransactionCondition($transactionCondition);
    }
    /**
     * Get brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * Set brand value
     * @param string $brand
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        $this->brand = $brand;
        return $this;
    }
    /**
     * Get enrolled value
     * @return string|null
     */
    public function getEnrolled()
    {
        return $this->enrolled;
    }
    /**
     * Set enrolled value
     * @param string $enrolled
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public function setEnrolled($enrolled = null)
    {
        // validation for constraint: string
        if (!is_null($enrolled) && !is_string($enrolled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($enrolled)), __LINE__);
        }
        $this->enrolled = $enrolled;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get eci value
     * @return string|null
     */
    public function getEci()
    {
        return $this->eci;
    }
    /**
     * Set eci value
     * @param string $eci
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public function setEci($eci = null)
    {
        // validation for constraint: string
        if (!is_null($eci) && !is_string($eci)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eci)), __LINE__);
        }
        $this->eci = $eci;
        return $this;
    }
    /**
     * Get xid value
     * @return string|null
     */
    public function getXid()
    {
        return $this->xid;
    }
    /**
     * Set xid value
     * @param string $xid
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public function setXid($xid = null)
    {
        // validation for constraint: string
        if (!is_null($xid) && !is_string($xid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xid)), __LINE__);
        }
        $this->xid = $xid;
        return $this;
    }
    /**
     * Get cavv value
     * @return string|null
     */
    public function getCavv()
    {
        return $this->cavv;
    }
    /**
     * Set cavv value
     * @param string $cavv
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public function setCavv($cavv = null)
    {
        // validation for constraint: string
        if (!is_null($cavv) && !is_string($cavv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cavv)), __LINE__);
        }
        $this->cavv = $cavv;
        return $this;
    }
    /**
     * Get cavvAlgorithm value
     * @return string|null
     */
    public function getCavvAlgorithm()
    {
        return $this->cavvAlgorithm;
    }
    /**
     * Set cavvAlgorithm value
     * @param string $cavvAlgorithm
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public function setCavvAlgorithm($cavvAlgorithm = null)
    {
        // validation for constraint: string
        if (!is_null($cavvAlgorithm) && !is_string($cavvAlgorithm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cavvAlgorithm)), __LINE__);
        }
        $this->cavvAlgorithm = $cavvAlgorithm;
        return $this;
    }
    /**
     * Get signValid value
     * @return string|null
     */
    public function getSignValid()
    {
        return $this->signValid;
    }
    /**
     * Set signValid value
     * @param string $signValid
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public function setSignValid($signValid = null)
    {
        // validation for constraint: string
        if (!is_null($signValid) && !is_string($signValid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signValid)), __LINE__);
        }
        $this->signValid = $signValid;
        return $this;
    }
    /**
     * Get transactionCondition value
     * @return string|null
     */
    public function getTransactionCondition()
    {
        return $this->transactionCondition;
    }
    /**
     * Set transactionCondition value
     * @param string $transactionCondition
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public function setTransactionCondition($transactionCondition = null)
    {
        // validation for constraint: string
        if (!is_null($transactionCondition) && !is_string($transactionCondition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionCondition)), __LINE__);
        }
        $this->transactionCondition = $transactionCondition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData
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
