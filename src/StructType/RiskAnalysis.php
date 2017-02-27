<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for riskAnalysis StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class RiskAnalysis extends AbstractStructBase
{
    /**
     * The score
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $score;
    /**
     * The resultCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $resultCode;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The requestId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $requestId;
    /**
     * The extraInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Restoore\SystempayWebservice\StructType\ExtInfo[]
     */
    public $extraInfo;
    /**
     * The fingerPrintId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fingerPrintId;
    /**
     * Constructor method for riskAnalysis
     * @uses RiskAnalysis::setScore()
     * @uses RiskAnalysis::setResultCode()
     * @uses RiskAnalysis::setStatus()
     * @uses RiskAnalysis::setRequestId()
     * @uses RiskAnalysis::setExtraInfo()
     * @uses RiskAnalysis::setFingerPrintId()
     * @param string $score
     * @param string $resultCode
     * @param string $status
     * @param string $requestId
     * @param \Restoore\SystempayWebservice\StructType\ExtInfo[] $extraInfo
     * @param string $fingerPrintId
     */
    public function __construct($score = null, $resultCode = null, $status = null, $requestId = null, array $extraInfo = array(), $fingerPrintId = null)
    {
        $this
            ->setScore($score)
            ->setResultCode($resultCode)
            ->setStatus($status)
            ->setRequestId($requestId)
            ->setExtraInfo($extraInfo)
            ->setFingerPrintId($fingerPrintId);
    }
    /**
     * Get score value
     * @return string|null
     */
    public function getScore()
    {
        return $this->score;
    }
    /**
     * Set score value
     * @param string $score
     * @return \Restoore\SystempayWebservice\StructType\RiskAnalysis
     */
    public function setScore($score = null)
    {
        // validation for constraint: string
        if (!is_null($score) && !is_string($score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($score)), __LINE__);
        }
        $this->score = $score;
        return $this;
    }
    /**
     * Get resultCode value
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }
    /**
     * Set resultCode value
     * @param string $resultCode
     * @return \Restoore\SystempayWebservice\StructType\RiskAnalysis
     */
    public function setResultCode($resultCode = null)
    {
        // validation for constraint: string
        if (!is_null($resultCode) && !is_string($resultCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resultCode)), __LINE__);
        }
        $this->resultCode = $resultCode;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \Restoore\SystempayWebservice\EnumType\RiskAnalysisProcessingStatus::valueIsValid()
     * @uses \Restoore\SystempayWebservice\EnumType\RiskAnalysisProcessingStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Restoore\SystempayWebservice\StructType\RiskAnalysis
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Restoore\SystempayWebservice\EnumType\RiskAnalysisProcessingStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Restoore\SystempayWebservice\EnumType\RiskAnalysisProcessingStatus::getValidValues())), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get requestId value
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param string $requestId
     * @return \Restoore\SystempayWebservice\StructType\RiskAnalysis
     */
    public function setRequestId($requestId = null)
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestId)), __LINE__);
        }
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * Get extraInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Restoore\SystempayWebservice\StructType\ExtInfo[]|null
     */
    public function getExtraInfo()
    {
        return isset($this->extraInfo) ? $this->extraInfo : null;
    }
    /**
     * Set extraInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\ExtInfo[] $extraInfo
     * @return \Restoore\SystempayWebservice\StructType\RiskAnalysis
     */
    public function setExtraInfo(array $extraInfo = array())
    {
        foreach ($extraInfo as $riskAnalysisExtraInfoItem) {
            // validation for constraint: itemType
            if (!$riskAnalysisExtraInfoItem instanceof \Restoore\SystempayWebservice\StructType\ExtInfo) {
                throw new \InvalidArgumentException(sprintf('The extraInfo property can only contain items of \Restoore\SystempayWebservice\StructType\ExtInfo, "%s" given', is_object($riskAnalysisExtraInfoItem) ? get_class($riskAnalysisExtraInfoItem) : gettype($riskAnalysisExtraInfoItem)), __LINE__);
            }
        }
        if (is_null($extraInfo) || (is_array($extraInfo) && empty($extraInfo))) {
            unset($this->extraInfo);
        } else {
            $this->extraInfo = $extraInfo;
        }
        return $this;
    }
    /**
     * Add item to extraInfo value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\ExtInfo $item
     * @return \Restoore\SystempayWebservice\StructType\RiskAnalysis
     */
    public function addToExtraInfo(\Restoore\SystempayWebservice\StructType\ExtInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Restoore\SystempayWebservice\StructType\ExtInfo) {
            throw new \InvalidArgumentException(sprintf('The extraInfo property can only contain items of \Restoore\SystempayWebservice\StructType\ExtInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->extraInfo[] = $item;
        return $this;
    }
    /**
     * Get fingerPrintId value
     * @return string|null
     */
    public function getFingerPrintId()
    {
        return $this->fingerPrintId;
    }
    /**
     * Set fingerPrintId value
     * @param string $fingerPrintId
     * @return \Restoore\SystempayWebservice\StructType\RiskAnalysis
     */
    public function setFingerPrintId($fingerPrintId = null)
    {
        // validation for constraint: string
        if (!is_null($fingerPrintId) && !is_string($fingerPrintId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fingerPrintId)), __LINE__);
        }
        $this->fingerPrintId = $fingerPrintId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\RiskAnalysis
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
