<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findPaymentsResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:findPaymentsResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class FindPaymentsResponse extends AbstractStructBase
{
    /**
     * The findPaymentsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\FindPaymentsResult
     */
    public $findPaymentsResult;
    /**
     * Constructor method for findPaymentsResponse
     * @uses FindPaymentsResponse::setFindPaymentsResult()
     * @param \Restoore\SystempayWebservice\StructType\FindPaymentsResult $findPaymentsResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\FindPaymentsResult $findPaymentsResult = null)
    {
        $this
            ->setFindPaymentsResult($findPaymentsResult);
    }
    /**
     * Get findPaymentsResult value
     * @return \Restoore\SystempayWebservice\StructType\FindPaymentsResult|null
     */
    public function getFindPaymentsResult()
    {
        return $this->findPaymentsResult;
    }
    /**
     * Set findPaymentsResult value
     * @param \Restoore\SystempayWebservice\StructType\FindPaymentsResult $findPaymentsResult
     * @return \Restoore\SystempayWebservice\StructType\FindPaymentsResponse
     */
    public function setFindPaymentsResult(\Restoore\SystempayWebservice\StructType\FindPaymentsResult $findPaymentsResult = null)
    {
        $this->findPaymentsResult = $findPaymentsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\FindPaymentsResponse
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
