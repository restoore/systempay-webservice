<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingDetailsRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class BillingDetailsRequest extends AbstractStructBase
{
    /**
     * The reference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reference;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $title;
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
     * The email
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
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
     * The language
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The cellPhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cellPhoneNumber;
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
     * Constructor method for billingDetailsRequest
     * @uses BillingDetailsRequest::setReference()
     * @uses BillingDetailsRequest::setTitle()
     * @uses BillingDetailsRequest::setType()
     * @uses BillingDetailsRequest::setFirstName()
     * @uses BillingDetailsRequest::setLastName()
     * @uses BillingDetailsRequest::setPhoneNumber()
     * @uses BillingDetailsRequest::setEmail()
     * @uses BillingDetailsRequest::setStreetNumber()
     * @uses BillingDetailsRequest::setAddress()
     * @uses BillingDetailsRequest::setAddress2()
     * @uses BillingDetailsRequest::setDistrict()
     * @uses BillingDetailsRequest::setZipCode()
     * @uses BillingDetailsRequest::setCity()
     * @uses BillingDetailsRequest::setState()
     * @uses BillingDetailsRequest::setCountry()
     * @uses BillingDetailsRequest::setLanguage()
     * @uses BillingDetailsRequest::setCellPhoneNumber()
     * @uses BillingDetailsRequest::setLegalName()
     * @uses BillingDetailsRequest::setIdentityCode()
     * @param string $reference
     * @param string $title
     * @param string $type
     * @param string $firstName
     * @param string $lastName
     * @param string $phoneNumber
     * @param string $email
     * @param string $streetNumber
     * @param string $address
     * @param string $address2
     * @param string $district
     * @param string $zipCode
     * @param string $city
     * @param string $state
     * @param string $country
     * @param string $language
     * @param string $cellPhoneNumber
     * @param string $legalName
     * @param string $identityCode
     */
    public function __construct($reference = null, $title = null, $type = null, $firstName = null, $lastName = null, $phoneNumber = null, $email = null, $streetNumber = null, $address = null, $address2 = null, $district = null, $zipCode = null, $city = null, $state = null, $country = null, $language = null, $cellPhoneNumber = null, $legalName = null, $identityCode = null)
    {
        $this
            ->setReference($reference)
            ->setTitle($title)
            ->setType($type)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPhoneNumber($phoneNumber)
            ->setEmail($email)
            ->setStreetNumber($streetNumber)
            ->setAddress($address)
            ->setAddress2($address2)
            ->setDistrict($district)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setState($state)
            ->setCountry($country)
            ->setLanguage($language)
            ->setCellPhoneNumber($cellPhoneNumber)
            ->setLegalName($legalName)
            ->setIdentityCode($identityCode);
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get cellPhoneNumber value
     * @return string|null
     */
    public function getCellPhoneNumber()
    {
        return $this->cellPhoneNumber;
    }
    /**
     * Set cellPhoneNumber value
     * @param string $cellPhoneNumber
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
     */
    public function setCellPhoneNumber($cellPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cellPhoneNumber) && !is_string($cellPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cellPhoneNumber)), __LINE__);
        }
        $this->cellPhoneNumber = $cellPhoneNumber;
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
     * @return \Restoore\SystempayWebservice\StructType\BillingDetailsRequest
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
