<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for extraDetailsRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ExtraDetailsRequest extends AbstractStructBase
{
    /**
     * The ipAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ipAddress;
    /**
     * The fingerPrintId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fingerPrintId;
    /**
     * Constructor method for extraDetailsRequest
     * @uses ExtraDetailsRequest::setIpAddress()
     * @uses ExtraDetailsRequest::setFingerPrintId()
     * @param string $ipAddress
     * @param string $fingerPrintId
     */
    public function __construct($ipAddress = null, $fingerPrintId = null)
    {
        $this
            ->setIpAddress($ipAddress)
            ->setFingerPrintId($fingerPrintId);
    }
    /**
     * Get ipAddress value
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
    /**
     * Set ipAddress value
     * @param string $ipAddress
     * @return \Restoore\SystempayWebservice\StructType\ExtraDetailsRequest
     */
    public function setIpAddress($ipAddress = null)
    {
        // validation for constraint: string
        if (!is_null($ipAddress) && !is_string($ipAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ipAddress)), __LINE__);
        }
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * Get fingerPrintId value
     * @return string|null
     */
    public function getFingerPrintId()
    {
        return $this->fingerPrintId;
    }
    /**
     * Set fingerPrintId value
     * @param string $fingerPrintId
     * @return \Restoore\SystempayWebservice\StructType\ExtraDetailsRequest
     */
    public function setFingerPrintId($fingerPrintId = null)
    {
        // validation for constraint: string
        if (!is_null($fingerPrintId) && !is_string($fingerPrintId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fingerPrintId)), __LINE__);
        }
        $this->fingerPrintId = $fingerPrintId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\ExtraDetailsRequest
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
