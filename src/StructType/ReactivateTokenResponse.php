<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reactivateTokenResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:reactivateTokenResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ReactivateTokenResponse extends AbstractStructBase
{
    /**
     * The reactivateTokenResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ReactivateTokenResult
     */
    public $reactivateTokenResult;
    /**
     * Constructor method for reactivateTokenResponse
     * @uses ReactivateTokenResponse::setReactivateTokenResult()
     * @param \Restoore\SystempayWebservice\StructType\ReactivateTokenResult $reactivateTokenResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\ReactivateTokenResult $reactivateTokenResult = null)
    {
        $this
            ->setReactivateTokenResult($reactivateTokenResult);
    }
    /**
     * Get reactivateTokenResult value
     * @return \Restoore\SystempayWebservice\StructType\ReactivateTokenResult|null
     */
    public function getReactivateTokenResult()
    {
        return $this->reactivateTokenResult;
    }
    /**
     * Set reactivateTokenResult value
     * @param \Restoore\SystempayWebservice\StructType\ReactivateTokenResult $reactivateTokenResult
     * @return \Restoore\SystempayWebservice\StructType\ReactivateTokenResponse
     */
    public function setReactivateTokenResult(\Restoore\SystempayWebservice\StructType\ReactivateTokenResult $reactivateTokenResult = null)
    {
        $this->reactivateTokenResult = $reactivateTokenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\ReactivateTokenResponse
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
