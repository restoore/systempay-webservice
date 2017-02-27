<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingDetailsRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ShippingDetailsRequest extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * The firstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $firstName;
    /**
     * The lastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lastName;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $phoneNumber;
    /**
     * The streetNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $streetNumber;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address;
    /**
     * The address2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $address2;
    /**
     * The district
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $district;
    /**
     * The zipCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $state;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The deliveryCompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryCompanyName;
    /**
     * The shippingSpeed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingSpeed;
    /**
     * The shippingMethod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shippingMethod;
    /**
     * The legalName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $legalName;
    /**
     * The identityCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identityCode;
    /**
     * Constructor method for shippingDetailsRequest
     * @uses ShippingDetailsRequest::setType()
     * @uses ShippingDetailsRequest::setFirstName()
     * @uses ShippingDetailsRequest::setLastName()
     * @uses ShippingDetailsRequest::setPhoneNumber()
     * @uses ShippingDetailsRequest::setStreetNumber()
     * @uses ShippingDetailsRequest::setAddress()
     * @uses ShippingDetailsRequest::setAddress2()
     * @uses ShippingDetailsRequest::setDistrict()
     * @uses ShippingDetailsRequest::setZipCode()
     * @uses ShippingDetailsRequest::setCity()
     * @uses ShippingDetailsRequest::setState()
     * @uses ShippingDetailsRequest::setCountry()
     * @uses ShippingDetailsRequest::setDeliveryCompanyName()
     * @uses ShippingDetailsRequest::setShippingSpeed()
     * @uses ShippingDetailsRequest::setShippingMethod()
     * @uses ShippingDetailsRequest::setLegalName()
     * @uses ShippingDetailsRequest::setIdentityCode()
     * @param string $type
     * @param string $firstName
     * @param string $lastName
     * @param string $phoneNumber
     * @param string $streetNumber
     * @param string $address
     * @param string $address2
     * @param string $district
     * @param string $zipCode
     * @param string $city
     * @param string $state
     * @param string $country
     * @param string $deliveryCompanyName
     * @param string $shippingSpeed
     * @param string $shippingMethod
     * @param string $legalName
     * @param string $identityCode
     */
    public function __construct($type = null, $firstName = null, $lastName = null, $phoneNumber = null, $streetNumber = null, $address = null, $address2 = null, $district = null, $zipCode = null, $city = null, $state = null, $country = null, $deliveryCompanyName = null, $shippingSpeed = null, $shippingMethod = null, $legalName = null, $identityCode = null)
    {
        $this
            ->setType($type)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPhoneNumber($phoneNumber)
            ->setStreetNumber($streetNumber)
            ->setAddress($address)
            ->setAddress2($address2)
            ->setDistrict($district)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setState($state)
            ->setCountry($country)
            ->setDeliveryCompanyName($deliveryCompanyName)
            ->setShippingSpeed($shippingSpeed)
            ->setShippingMethod($shippingMethod)
            ->setLegalName($legalName)
            ->setIdentityCode($identityCode);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Restoore\SystempayWebservice\EnumType\CustStatus::valueIsValid()
     * @uses \Restoore\SystempayWebservice\EnumType\CustStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Restoore\SystempayWebservice\EnumType\CustStatus::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Restoore\SystempayWebservice\EnumType\CustStatus::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get streetNumber value
     * @return string|null
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }
    /**
     * Set streetNumber value
     * @param string $streetNumber
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setStreetNumber($streetNumber = null)
    {
        // validation for constraint: string
        if (!is_null($streetNumber) && !is_string($streetNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetNumber)), __LINE__);
        }
        $this->streetNumber = $streetNumber;
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get address2 value
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->address2;
    }
    /**
     * Set address2 value
     * @param string $address2
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setAddress2($address2 = null)
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address2)), __LINE__);
        }
        $this->address2 = $address2;
        return $this;
    }
    /**
     * Get district value
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->district;
    }
    /**
     * Set district value
     * @param string $district
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setDistrict($district = null)
    {
        // validation for constraint: string
        if (!is_null($district) && !is_string($district)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($district)), __LINE__);
        }
        $this->district = $district;
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get deliveryCompanyName value
     * @return string|null
     */
    public function getDeliveryCompanyName()
    {
        return $this->deliveryCompanyName;
    }
    /**
     * Set deliveryCompanyName value
     * @param string $deliveryCompanyName
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setDeliveryCompanyName($deliveryCompanyName = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryCompanyName) && !is_string($deliveryCompanyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryCompanyName)), __LINE__);
        }
        $this->deliveryCompanyName = $deliveryCompanyName;
        return $this;
    }
    /**
     * Get shippingSpeed value
     * @return string|null
     */
    public function getShippingSpeed()
    {
        return $this->shippingSpeed;
    }
    /**
     * Set shippingSpeed value
     * @uses \Restoore\SystempayWebservice\EnumType\DeliverySpeed::valueIsValid()
     * @uses \Restoore\SystempayWebservice\EnumType\DeliverySpeed::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingSpeed
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setShippingSpeed($shippingSpeed = null)
    {
        // validation for constraint: enumeration
        if (!\Restoore\SystempayWebservice\EnumType\DeliverySpeed::valueIsValid($shippingSpeed)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingSpeed, implode(', ', \Restoore\SystempayWebservice\EnumType\DeliverySpeed::getValidValues())), __LINE__);
        }
        $this->shippingSpeed = $shippingSpeed;
        return $this;
    }
    /**
     * Get shippingMethod value
     * @return string|null
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }
    /**
     * Set shippingMethod value
     * @uses \Restoore\SystempayWebservice\EnumType\DeliveryType::valueIsValid()
     * @uses \Restoore\SystempayWebservice\EnumType\DeliveryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingMethod
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setShippingMethod($shippingMethod = null)
    {
        // validation for constraint: enumeration
        if (!\Restoore\SystempayWebservice\EnumType\DeliveryType::valueIsValid($shippingMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingMethod, implode(', ', \Restoore\SystempayWebservice\EnumType\DeliveryType::getValidValues())), __LINE__);
        }
        $this->shippingMethod = $shippingMethod;
        return $this;
    }
    /**
     * Get legalName value
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->legalName;
    }
    /**
     * Set legalName value
     * @param string $legalName
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setLegalName($legalName = null)
    {
        // validation for constraint: string
        if (!is_null($legalName) && !is_string($legalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalName)), __LINE__);
        }
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * Get identityCode value
     * @return string|null
     */
    public function getIdentityCode()
    {
        return $this->identityCode;
    }
    /**
     * Set identityCode value
     * @param string $identityCode
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
     */
    public function setIdentityCode($identityCode = null)
    {
        // validation for constraint: string
        if (!is_null($identityCode) && !is_string($identityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identityCode)), __LINE__);
        }
        $this->identityCode = $identityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\ShippingDetailsRequest
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
