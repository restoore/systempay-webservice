<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for threeDSResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ThreeDSResponse extends AbstractStructBase
{
    /**
     * The authenticationRequestData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\AuthenticationRequestData
     */
    public $authenticationRequestData;
    /**
     * The authenticationResultData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\AuthenticationResultData
     */
    public $authenticationResultData;
    /**
     * Constructor method for threeDSResponse
     * @uses ThreeDSResponse::setAuthenticationRequestData()
     * @uses ThreeDSResponse::setAuthenticationResultData()
     * @param \Restoore\SystempayWebservice\StructType\AuthenticationRequestData $authenticationRequestData
     * @param \Restoore\SystempayWebservice\StructType\AuthenticationResultData $authenticationResultData
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\AuthenticationRequestData $authenticationRequestData = null, \Restoore\SystempayWebservice\StructType\AuthenticationResultData $authenticationResultData = null)
    {
        $this
            ->setAuthenticationRequestData($authenticationRequestData)
            ->setAuthenticationResultData($authenticationResultData);
    }
    /**
     * Get authenticationRequestData value
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationRequestData|null
     */
    public function getAuthenticationRequestData()
    {
        return $this->authenticationRequestData;
    }
    /**
     * Set authenticationRequestData value
     * @param \Restoore\SystempayWebservice\StructType\AuthenticationRequestData $authenticationRequestData
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSResponse
     */
    public function setAuthenticationRequestData(\Restoore\SystempayWebservice\StructType\AuthenticationRequestData $authenticationRequestData = null)
    {
        $this->authenticationRequestData = $authenticationRequestData;
        return $this;
    }
    /**
     * Get authenticationResultData value
     * @return \Restoore\SystempayWebservice\StructType\AuthenticationResultData|null
     */
    public function getAuthenticationResultData()
    {
        return $this->authenticationResultData;
    }
    /**
     * Set authenticationResultData value
     * @param \Restoore\SystempayWebservice\StructType\AuthenticationResultData $authenticationResultData
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSResponse
     */
    public function setAuthenticationResultData(\Restoore\SystempayWebservice\StructType\AuthenticationResultData $authenticationResultData = null)
    {
        $this->authenticationResultData = $authenticationResultData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSResponse
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
