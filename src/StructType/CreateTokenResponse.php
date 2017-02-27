<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createTokenResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:createTokenResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CreateTokenResponse extends AbstractStructBase
{
    /**
     * The createTokenResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CreateTokenResult
     */
    public $createTokenResult;
    /**
     * Constructor method for createTokenResponse
     * @uses CreateTokenResponse::setCreateTokenResult()
     * @param \Restoore\SystempayWebservice\StructType\CreateTokenResult $createTokenResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CreateTokenResult $createTokenResult = null)
    {
        $this
            ->setCreateTokenResult($createTokenResult);
    }
    /**
     * Get createTokenResult value
     * @return \Restoore\SystempayWebservice\StructType\CreateTokenResult|null
     */
    public function getCreateTokenResult()
    {
        return $this->createTokenResult;
    }
    /**
     * Set createTokenResult value
     * @param \Restoore\SystempayWebservice\StructType\CreateTokenResult $createTokenResult
     * @return \Restoore\SystempayWebservice\StructType\CreateTokenResponse
     */
    public function setCreateTokenResult(\Restoore\SystempayWebservice\StructType\CreateTokenResult $createTokenResult = null)
    {
        $this->createTokenResult = $createTokenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CreateTokenResponse
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
