<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkThreeDSAuthenticationResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:checkThreeDSAuthenticationResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CheckThreeDSAuthenticationResponse extends AbstractStructBase
{
    /**
     * The checkThreeDSAuthenticationResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResult
     */
    public $checkThreeDSAuthenticationResult;
    /**
     * Constructor method for checkThreeDSAuthenticationResponse
     * @uses CheckThreeDSAuthenticationResponse::setCheckThreeDSAuthenticationResult()
     * @param \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult = null)
    {
        $this
            ->setCheckThreeDSAuthenticationResult($checkThreeDSAuthenticationResult);
    }
    /**
     * Get checkThreeDSAuthenticationResult value
     * @return \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResult|null
     */
    public function getCheckThreeDSAuthenticationResult()
    {
        return $this->checkThreeDSAuthenticationResult;
    }
    /**
     * Set checkThreeDSAuthenticationResult value
     * @param \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult
     * @return \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResponse
     */
    public function setCheckThreeDSAuthenticationResult(\Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult = null)
    {
        $this->checkThreeDSAuthenticationResult = $checkThreeDSAuthenticationResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthenticationResponse
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
