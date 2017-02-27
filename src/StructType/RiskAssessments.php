<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for riskAssessments StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class RiskAssessments extends AbstractStructBase
{
    /**
     * The results
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $results;
    /**
     * Constructor method for riskAssessments
     * @uses RiskAssessments::setResults()
     * @param string $results
     */
    public function __construct($results = null)
    {
        $this
            ->setResults($results);
    }
    /**
     * Get results value
     * @return string|null
     */
    public function getResults()
    {
        return $this->results;
    }
    /**
     * Set results value
     * @param string $results
     * @return \Restoore\SystempayWebservice\StructType\RiskAssessments
     */
    public function setResults($results = null)
    {
        // validation for constraint: string
        if (!is_null($results) && !is_string($results)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($results)), __LINE__);
        }
        $this->results = $results;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\RiskAssessments
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
