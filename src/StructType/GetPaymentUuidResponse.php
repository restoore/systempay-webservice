<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPaymentUuidResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getPaymentUuidResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class GetPaymentUuidResponse extends AbstractStructBase
{
    /**
     * The legacyTransactionKeyResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyResult
     */
    public $legacyTransactionKeyResult;
    /**
     * Constructor method for getPaymentUuidResponse
     * @uses GetPaymentUuidResponse::setLegacyTransactionKeyResult()
     * @param \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyResult $legacyTransactionKeyResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\LegacyTransactionKeyResult $legacyTransactionKeyResult = null)
    {
        $this
            ->setLegacyTransactionKeyResult($legacyTransactionKeyResult);
    }
    /**
     * Get legacyTransactionKeyResult value
     * @return \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyResult|null
     */
    public function getLegacyTransactionKeyResult()
    {
        return $this->legacyTransactionKeyResult;
    }
    /**
     * Set legacyTransactionKeyResult value
     * @param \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyResult $legacyTransactionKeyResult
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentUuidResponse
     */
    public function setLegacyTransactionKeyResult(\Restoore\SystempayWebservice\StructType\LegacyTransactionKeyResult $legacyTransactionKeyResult = null)
    {
        $this->legacyTransactionKeyResult = $legacyTransactionKeyResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentUuidResponse
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
