<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelTokenResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:cancelTokenResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CancelTokenResponse extends AbstractStructBase
{
    /**
     * The cancelTokenResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CancelTokenResult
     */
    public $cancelTokenResult;
    /**
     * Constructor method for cancelTokenResponse
     * @uses CancelTokenResponse::setCancelTokenResult()
     * @param \Restoore\SystempayWebservice\StructType\CancelTokenResult $cancelTokenResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CancelTokenResult $cancelTokenResult = null)
    {
        $this
            ->setCancelTokenResult($cancelTokenResult);
    }
    /**
     * Get cancelTokenResult value
     * @return \Restoore\SystempayWebservice\StructType\CancelTokenResult|null
     */
    public function getCancelTokenResult()
    {
        return $this->cancelTokenResult;
    }
    /**
     * Set cancelTokenResult value
     * @param \Restoore\SystempayWebservice\StructType\CancelTokenResult $cancelTokenResult
     * @return \Restoore\SystempayWebservice\StructType\CancelTokenResponse
     */
    public function setCancelTokenResult(\Restoore\SystempayWebservice\StructType\CancelTokenResult $cancelTokenResult = null)
    {
        $this->cancelTokenResult = $cancelTokenResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CancelTokenResponse
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
