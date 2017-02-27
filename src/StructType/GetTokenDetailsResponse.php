<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTokenDetailsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getTokenDetailsResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class GetTokenDetailsResponse extends AbstractStructBase
{
    /**
     * The getTokenDetailsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\GetTokenDetailsResult
     */
    public $getTokenDetailsResult;
    /**
     * Constructor method for getTokenDetailsResponse
     * @uses GetTokenDetailsResponse::setGetTokenDetailsResult()
     * @param \Restoore\SystempayWebservice\StructType\GetTokenDetailsResult $getTokenDetailsResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\GetTokenDetailsResult $getTokenDetailsResult = null)
    {
        $this
            ->setGetTokenDetailsResult($getTokenDetailsResult);
    }
    /**
     * Get getTokenDetailsResult value
     * @return \Restoore\SystempayWebservice\StructType\GetTokenDetailsResult|null
     */
    public function getGetTokenDetailsResult()
    {
        return $this->getTokenDetailsResult;
    }
    /**
     * Set getTokenDetailsResult value
     * @param \Restoore\SystempayWebservice\StructType\GetTokenDetailsResult $getTokenDetailsResult
     * @return \Restoore\SystempayWebservice\StructType\GetTokenDetailsResponse
     */
    public function setGetTokenDetailsResult(\Restoore\SystempayWebservice\StructType\GetTokenDetailsResult $getTokenDetailsResult = null)
    {
        $this->getTokenDetailsResult = $getTokenDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\GetTokenDetailsResponse
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
