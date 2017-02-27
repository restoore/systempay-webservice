<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for legacyTransactionKeyRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class LegacyTransactionKeyRequest extends AbstractStructBase
{
    /**
     * The transactionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $transactionId;
    /**
     * The sequenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $sequenceNumber;
    /**
     * The creationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $creationDate;
    /**
     * Constructor method for legacyTransactionKeyRequest
     * @uses LegacyTransactionKeyRequest::setTransactionId()
     * @uses LegacyTransactionKeyRequest::setSequenceNumber()
     * @uses LegacyTransactionKeyRequest::setCreationDate()
     * @param string $transactionId
     * @param int $sequenceNumber
     * @param string $creationDate
     */
    public function __construct($transactionId = null, $sequenceNumber = null, $creationDate = null)
    {
        $this
            ->setTransactionId($transactionId)
            ->setSequenceNumber($sequenceNumber)
            ->setCreationDate($creationDate);
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * Get sequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }
    /**
     * Set sequenceNumber value
     * @param int $sequenceNumber
     * @return \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->sequenceNumber = $sequenceNumber;
        return $this;
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
     * @return \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\LegacyTransactionKeyRequest
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
