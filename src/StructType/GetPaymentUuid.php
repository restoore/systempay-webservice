<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPaymentUuid StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getPaymentUuid
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class GetPaymentUuid extends AbstractStructBase
{
    /**
     * The legacyTransactionKeyRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest
     */
    public $legacyTransactionKeyRequest;
    /**
     * Constructor method for getPaymentUuid
     * @uses GetPaymentUuid::setLegacyTransactionKeyRequest()
     * @param \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest $legacyTransactionKeyRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest $legacyTransactionKeyRequest = null)
    {
        $this
            ->setLegacyTransactionKeyRequest($legacyTransactionKeyRequest);
    }
    /**
     * Get legacyTransactionKeyRequest value
     * @return \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest|null
     */
    public function getLegacyTransactionKeyRequest()
    {
        return $this->legacyTransactionKeyRequest;
    }
    /**
     * Set legacyTransactionKeyRequest value
     * @param \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest $legacyTransactionKeyRequest
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentUuid
     */
    public function setLegacyTransactionKeyRequest(\Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest $legacyTransactionKeyRequest = null)
    {
        $this->legacyTransactionKeyRequest = $legacyTransactionKeyRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\GetPaymentUuid
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
