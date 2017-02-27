<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customerRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CustomerRequest extends AbstractStructBase
{
    /**
     * The billingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
     */
    public $billingDetails;
    /**
     * The shippingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public $shippingDetails;
    /**
     * The extraDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ExtraDetailsRequest
     */
    public $extraDetails;
    /**
     * Constructor method for customerRequest
     * @uses CustomerRequest::setBillingDetails()
     * @uses CustomerRequest::setShippingDetails()
     * @uses CustomerRequest::setExtraDetails()
     * @param \Restoore\SystempayWebservice\StructType\BillingDetailsRequest $billingDetails
     * @param \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest $shippingDetails
     * @param \Restoore\SystempayWebservice\StructType\ExtraDetailsRequest $extraDetails
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\BillingDetailsRequest $billingDetails = null, \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest $shippingDetails = null, \Restoore\SystempayWebservice\StructType\ExtraDetailsRequest $extraDetails = null)
    {
        $this
            ->setBillingDetails($billingDetails)
            ->setShippingDetails($shippingDetails)
            ->setExtraDetails($extraDetails);
    }
    /**
     * Get billingDetails value
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest|null
     */
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }
    /**
     * Set billingDetails value
     * @param \Restoore\SystempayWebservice\StructType\BillingDetailsRequest $billingDetails
     * @return \Restoore\SystempayWebservice\StructType\CustomerRequest
     */
    public function setBillingDetails(\Restoore\SystempayWebservice\StructType\BillingDetailsRequest $billingDetails = null)
    {
        $this->billingDetails = $billingDetails;
        return $this;
    }
    /**
     * Get shippingDetails value
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest|null
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }
    /**
     * Set shippingDetails value
     * @param \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest $shippingDetails
     * @return \Restoore\SystempayWebservice\StructType\CustomerRequest
     */
    public function setShippingDetails(\Restoore\SystempayWebservice\StructType\ShippingDetailsRequest $shippingDetails = null)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get extraDetails value
     * @return \Restoore\SystempayWebservice\StructType\ExtraDetailsRequest|null
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }
    /**
     * Set extraDetails value
     * @param \Restoore\SystempayWebservice\StructType\ExtraDetailsRequest $extraDetails
     * @return \Restoore\SystempayWebservice\StructType\CustomerRequest
     */
    public function setExtraDetails(\Restoore\SystempayWebservice\StructType\ExtraDetailsRequest $extraDetails = null)
    {
        $this->extraDetails = $extraDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CustomerRequest
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
