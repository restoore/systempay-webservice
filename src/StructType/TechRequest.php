<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for techRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class TechRequest extends AbstractStructBase
{
    /**
     * The browserUserAgent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $browserUserAgent;
    /**
     * The browserAccept
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $browserAccept;
    /**
     * Constructor method for techRequest
     * @uses TechRequest::setBrowserUserAgent()
     * @uses TechRequest::setBrowserAccept()
     * @param string $browserUserAgent
     * @param string $browserAccept
     */
    public function __construct($browserUserAgent = null, $browserAccept = null)
    {
        $this
            ->setBrowserUserAgent($browserUserAgent)
            ->setBrowserAccept($browserAccept);
    }
    /**
     * Get browserUserAgent value
     * @return string|null
     */
    public function getBrowserUserAgent()
    {
        return $this->browserUserAgent;
    }
    /**
     * Set browserUserAgent value
     * @param string $browserUserAgent
     * @return \Restoore\SystempayWebservice\StructType\TechRequest
     */
    public function setBrowserUserAgent($browserUserAgent = null)
    {
        // validation for constraint: string
        if (!is_null($browserUserAgent) && !is_string($browserUserAgent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($browserUserAgent)), __LINE__);
        }
        $this->browserUserAgent = $browserUserAgent;
        return $this;
    }
    /**
     * Get browserAccept value
     * @return string|null
     */
    public function getBrowserAccept()
    {
        return $this->browserAccept;
    }
    /**
     * Set browserAccept value
     * @param string $browserAccept
     * @return \Restoore\SystempayWebservice\StructType\TechRequest
     */
    public function setBrowserAccept($browserAccept = null)
    {
        // validation for constraint: string
        if (!is_null($browserAccept) && !is_string($browserAccept)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($browserAccept)), __LINE__);
        }
        $this->browserAccept = $browserAccept;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\TechRequest
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
