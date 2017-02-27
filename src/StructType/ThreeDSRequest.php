<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for threeDSRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ThreeDSRequest extends AbstractStructBase
{
    /**
     * The mode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mode;
    /**
     * The requestId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $requestId;
    /**
     * The pares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pares;
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
     * The algorithm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $algorithm;
    /**
     * The mpiExtension
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\MpiExtensionRequest
     */
    public $mpiExtension;
    /**
     * Constructor method for threeDSRequest
     * @uses ThreeDSRequest::setMode()
     * @uses ThreeDSRequest::setRequestId()
     * @uses ThreeDSRequest::setPares()
     * @uses ThreeDSRequest::setBrand()
     * @uses ThreeDSRequest::setEnrolled()
     * @uses ThreeDSRequest::setStatus()
     * @uses ThreeDSRequest::setEci()
     * @uses ThreeDSRequest::setXid()
     * @uses ThreeDSRequest::setCavv()
     * @uses ThreeDSRequest::setAlgorithm()
     * @uses ThreeDSRequest::setMpiExtension()
     * @param string $mode
     * @param string $requestId
     * @param string $pares
     * @param string $brand
     * @param string $enrolled
     * @param string $status
     * @param string $eci
     * @param string $xid
     * @param string $cavv
     * @param string $algorithm
     * @param \Restoore\SystempayWebservice\StructType\MpiExtensionRequest $mpiExtension
     */
    public function __construct($mode = null, $requestId = null, $pares = null, $brand = null, $enrolled = null, $status = null, $eci = null, $xid = null, $cavv = null, $algorithm = null, \Restoore\SystempayWebservice\StructType\MpiExtensionRequest $mpiExtension = null)
    {
        $this
            ->setMode($mode)
            ->setRequestId($requestId)
            ->setPares($pares)
            ->setBrand($brand)
            ->setEnrolled($enrolled)
            ->setStatus($status)
            ->setEci($eci)
            ->setXid($xid)
            ->setCavv($cavv)
            ->setAlgorithm($algorithm)
            ->setMpiExtension($mpiExtension);
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @uses \Restoore\SystempayWebservice\EnumType\ThreeDSMode::valueIsValid()
     * @uses \Restoore\SystempayWebservice\EnumType\ThreeDSMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mode
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
     */
    public function setMode($mode = null)
    {
        // validation for constraint: enumeration
        if (!\Restoore\SystempayWebservice\EnumType\ThreeDSMode::valueIsValid($mode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mode, implode(', ', \Restoore\SystempayWebservice\EnumType\ThreeDSMode::getValidValues())), __LINE__);
        }
        $this->mode = $mode;
        return $this;
    }
    /**
     * Get requestId value
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param string $requestId
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
     */
    public function setRequestId($requestId = null)
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestId)), __LINE__);
        }
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * Get pares value
     * @return string|null
     */
    public function getPares()
    {
        return $this->pares;
    }
    /**
     * Set pares value
     * @param string $pares
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
     */
    public function setPares($pares = null)
    {
        // validation for constraint: string
        if (!is_null($pares) && !is_string($pares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pares)), __LINE__);
        }
        $this->pares = $pares;
        return $this;
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
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
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
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
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
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
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
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
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
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
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
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
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
     * Get algorithm value
     * @return string|null
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }
    /**
     * Set algorithm value
     * @param string $algorithm
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
     */
    public function setAlgorithm($algorithm = null)
    {
        // validation for constraint: string
        if (!is_null($algorithm) && !is_string($algorithm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($algorithm)), __LINE__);
        }
        $this->algorithm = $algorithm;
        return $this;
    }
    /**
     * Get mpiExtension value
     * @return \Restoore\SystempayWebservice\StructType\MpiExtensionRequest|null
     */
    public function getMpiExtension()
    {
        return $this->mpiExtension;
    }
    /**
     * Set mpiExtension value
     * @param \Restoore\SystempayWebservice\StructType\MpiExtensionRequest $mpiExtension
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
     */
    public function setMpiExtension(\Restoore\SystempayWebservice\StructType\MpiExtensionRequest $mpiExtension = null)
    {
        $this->mpiExtension = $mpiExtension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest
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
