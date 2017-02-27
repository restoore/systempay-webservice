<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createTokenFromTransactionResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:createTokenFromTransactionResponse
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CreateTokenFromTransactionResponse extends AbstractStructBase
{
    /**
     * The createTokenFromTransactionResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResult
     */
    public $createTokenFromTransactionResult;
    /**
     * Constructor method for createTokenFromTransactionResponse
     * @uses CreateTokenFromTransactionResponse::setCreateTokenFromTransactionResult()
     * @param \Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResult $createTokenFromTransactionResult
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResult $createTokenFromTransactionResult = null)
    {
        $this
            ->setCreateTokenFromTransactionResult($createTokenFromTransactionResult);
    }
    /**
     * Get createTokenFromTransactionResult value
     * @return \Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResult|null
     */
    public function getCreateTokenFromTransactionResult()
    {
        return $this->createTokenFromTransactionResult;
    }
    /**
     * Set createTokenFromTransactionResult value
     * @param \Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResult $createTokenFromTransactionResult
     * @return \Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResponse
     */
    public function setCreateTokenFromTransactionResult(\Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResult $createTokenFromTransactionResult = null)
    {
        $this->createTokenFromTransactionResult = $createTokenFromTransactionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\CreateTokenFromTransactionResponse
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
