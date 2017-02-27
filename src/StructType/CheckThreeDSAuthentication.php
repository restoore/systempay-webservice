<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkThreeDSAuthentication StructType
 * Meta informations extracted from the WSDL
 * - type: tns:checkThreeDSAuthentication
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CheckThreeDSAuthentication extends AbstractStructBase
{
    /**
     * The commonRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonRequest
     */
    public $commonRequest;
    /**
     * The threeDSRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ThreeDSRequest
     */
    public $threeDSRequest;
    /**
     * Constructor method for checkThreeDSAuthentication
     * @uses CheckThreeDSAuthentication::setCommonRequest()
     * @uses CheckThreeDSAuthentication::setThreeDSRequest()
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @param \Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null, \Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest = null)
    {
        $this
            ->setCommonRequest($commonRequest)
            ->setThreeDSRequest($threeDSRequest);
    }
    /**
     * Get commonRequest value
     * @return \Restoore\SystempayWebservice\StructType\CommonRequest|null
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }
    /**
     * Set commonRequest value
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @return \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthentication
     */
    public function setCommonRequest(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }
    /**
     * Get threeDSRequest value
     * @return \Restoore\SystempayWebservice\StructType\ThreeDSRequest|null
     */
    public function getThreeDSRequest()
    {
        return $this->threeDSRequest;
    }
    /**
     * Set threeDSRequest value
     * @param \Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest
     * @return \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthentication
     */
    public function setThreeDSRequest(\Restoore\SystempayWebservice\StructType\ThreeDSRequest $threeDSRequest = null)
    {
        $this->threeDSRequest = $threeDSRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CheckThreeDSAuthentication
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
