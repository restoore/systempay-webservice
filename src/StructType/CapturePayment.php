<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for capturePayment StructType
 * Meta informations extracted from the WSDL
 * - type: tns:capturePayment
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CapturePayment extends AbstractStructBase
{
    /**
     * The settlementRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\SettlementRequest
     */
    public $settlementRequest;
    /**
     * Constructor method for capturePayment
     * @uses CapturePayment::setSettlementRequest()
     * @param \Restoore\SystempayWebservice\StructType\SettlementRequest $settlementRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\SettlementRequest $settlementRequest = null)
    {
        $this
            ->setSettlementRequest($settlementRequest);
    }
    /**
     * Get settlementRequest value
     * @return \Restoore\SystempayWebservice\StructType\SettlementRequest|null
     */
    public function getSettlementRequest()
    {
        return $this->settlementRequest;
    }
    /**
     * Set settlementRequest value
     * @param \Restoore\SystempayWebservice\StructType\SettlementRequest $settlementRequest
     * @return \Restoore\SystempayWebservice\StructType\CapturePayment
     */
    public function setSettlementRequest(\Restoore\SystempayWebservice\StructType\SettlementRequest $settlementRequest = null)
    {
        $this->settlementRequest = $settlementRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CapturePayment
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
