<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tokenResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class TokenResponse extends AbstractStructBase
{
    /**
     * The creationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $creationDate;
    /**
     * The cancellationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cancellationDate;
    /**
     * Constructor method for tokenResponse
     * @uses TokenResponse::setCreationDate()
     * @uses TokenResponse::setCancellationDate()
     * @param string $creationDate
     * @param string $cancellationDate
     */
    public function __construct($creationDate = null, $cancellationDate = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCancellationDate($cancellationDate);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Restoore\SystempayWebservice\StructType\TokenResponse
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * Get cancellationDate value
     * @return string|null
     */
    public function getCancellationDate()
    {
        return $this->cancellationDate;
    }
    /**
     * Set cancellationDate value
     * @param string $cancellationDate
     * @return \Restoore\SystempayWebservice\StructType\TokenResponse
     */
    public function setCancellationDate($cancellationDate = null)
    {
        // validation for constraint: string
        if (!is_null($cancellationDate) && !is_string($cancellationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellationDate)), __LINE__);
        }
        $this->cancellationDate = $cancellationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\TokenResponse
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
