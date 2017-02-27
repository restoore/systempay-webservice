<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customerResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CustomerResponse extends AbstractStructBase
{
    /**
     * The billingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\BillingDetailsResponse
     */
    public $billingDetails;
    /**
     * The shippingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ShippingDetailsResponse
     */
    public $shippingDetails;
    /**
     * The extraDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ExtraDetailsResponse
     */
    public $extraDetails;
    /**
     * Constructor method for customerResponse
     * @uses CustomerResponse::setBillingDetails()
     * @uses CustomerResponse::setShippingDetails()
     * @uses CustomerResponse::setExtraDetails()
     * @param \Restoore\SystempayWebservice\StructType\BillingDetailsResponse $billingDetails
     * @param \Restoore\SystempayWebservice\StructType\ShippingDetailsResponse $shippingDetails
     * @param \Restoore\SystempayWebservice\StructType\ExtraDetailsResponse $extraDetails
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\BillingDetailsResponse $billingDetails = null, \Restoore\SystempayWebservice\StructType\ShippingDetailsResponse $shippingDetails = null, \Restoore\SystempayWebservice\StructType\ExtraDetailsResponse $extraDetails = null)
    {
        $this
            ->setBillingDetails($billingDetails)
            ->setShippingDetails($shippingDetails)
            ->setExtraDetails($extraDetails);
    }
    /**
     * Get billingDetails value
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsResponse|null
     */
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }
    /**
     * Set billingDetails value
     * @param \Restoore\SystempayWebservice\StructType\BillingDetailsResponse $billingDetails
     * @return \Restoore\SystempayWebservice\StructType\CustomerResponse
     */
    public function setBillingDetails(\Restoore\SystempayWebservice\StructType\BillingDetailsResponse $billingDetails = null)
    {
        $this->billingDetails = $billingDetails;
        return $this;
    }
    /**
     * Get shippingDetails value
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsResponse|null
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }
    /**
     * Set shippingDetails value
     * @param \Restoore\SystempayWebservice\StructType\ShippingDetailsResponse $shippingDetails
     * @return \Restoore\SystempayWebservice\StructType\CustomerResponse
     */
    public function setShippingDetails(\Restoore\SystempayWebservice\StructType\ShippingDetailsResponse $shippingDetails = null)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get extraDetails value
     * @return \Restoore\SystempayWebservice\StructType\ExtraDetailsResponse|null
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }
    /**
     * Set extraDetails value
     * @param \Restoore\SystempayWebservice\StructType\ExtraDetailsResponse $extraDetails
     * @return \Restoore\SystempayWebservice\StructType\CustomerResponse
     */
    public function setExtraDetails(\Restoore\SystempayWebservice\StructType\ExtraDetailsResponse $extraDetails = null)
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
     * @return \Restoore\SystempayWebservice\StructType\CustomerResponse
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
