<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateTokenResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:updateTokenResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class UpdateTokenResponse extends AbstractStructBase
{
    /**
     * The updateTokenResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\UpdateTokenResult
     */
    public $updateTokenResult;
    /**
     * Constructor method for updateTokenResponse
     * @uses UpdateTokenResponse::setUpdateTokenResult()
     * @param \Restoore\SystempayWebservice\StructType\UpdateTokenResult $updateTokenResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\UpdateTokenResult $updateTokenResult = null)
    {
        $this
            ->setUpdateTokenResult($updateTokenResult);
    }
    /**
     * Get updateTokenResult value
     * @return \Restoore\SystempayWebservice\StructType\UpdateTokenResult|null
     */
    public function getUpdateTokenResult()
    {
        return $this->updateTokenResult;
    }
    /**
     * Set updateTokenResult value
     * @param \Restoore\SystempayWebservice\StructType\UpdateTokenResult $updateTokenResult
     * @return \Restoore\SystempayWebservice\StructType\UpdateTokenResponse
     */
    public function setUpdateTokenResult(\Restoore\SystempayWebservice\StructType\UpdateTokenResult $updateTokenResult = null)
    {
        $this->updateTokenResult = $updateTokenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\UpdateTokenResponse
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
