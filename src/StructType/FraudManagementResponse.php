<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fraudManagementResponse StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class FraudManagementResponse extends AbstractStructBase
{
    /**
     * The riskControl
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\RiskControl[]
     */
    public $riskControl;
    /**
     * The riskAnalysis
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\RiskAnalysis[]
     */
    public $riskAnalysis;
    /**
     * The riskAssessments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\RiskAssessments
     */
    public $riskAssessments;
    /**
     * Constructor method for fraudManagementResponse
     * @uses FraudManagementResponse::setRiskControl()
     * @uses FraudManagementResponse::setRiskAnalysis()
     * @uses FraudManagementResponse::setRiskAssessments()
     * @param \Restoore\SystempayWebservice\StructType\RiskControl[] $riskControl
     * @param \Restoore\SystempayWebservice\StructType\RiskAnalysis[] $riskAnalysis
     * @param \Restoore\SystempayWebservice\StructType\RiskAssessments $riskAssessments
     */
    public function __construct(array $riskControl = array(), array $riskAnalysis = array(), \Restoore\SystempayWebservice\StructType\RiskAssessments $riskAssessments = null)
    {
        $this
            ->setRiskControl($riskControl)
            ->setRiskAnalysis($riskAnalysis)
            ->setRiskAssessments($riskAssessments);
    }
    /**
     * Get riskControl value
     * @return \Restoore\SystempayWebservice\StructType\RiskControl[]|null
     */
    public function getRiskControl()
    {
        return $this->riskControl;
    }
    /**
     * Set riskControl value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\RiskControl[] $riskControl
     * @return \Restoore\SystempayWebservice\StructType\FraudManagementResponse
     */
    public function setRiskControl(array $riskControl = array())
    {
        foreach ($riskControl as $fraudManagementResponseRiskControlItem) {
            // validation for constraint: itemType
            if (!$fraudManagementResponseRiskControlItem instanceof \Restoore\SystempayWebservice\StructType\RiskControl) {
                throw new \InvalidArgumentException(sprintf('The riskControl property can only contain items of \Restoore\SystempayWebservice\StructType\RiskControl, "%s" given', is_object($fraudManagementResponseRiskControlItem) ? get_class($fraudManagementResponseRiskControlItem) : gettype($fraudManagementResponseRiskControlItem)), __LINE__);
            }
        }
        $this->riskControl = $riskControl;
        return $this;
    }
    /**
     * Add item to riskControl value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\RiskControl $item
     * @return \Restoore\SystempayWebservice\StructType\FraudManagementResponse
     */
    public function addToRiskControl(\Restoore\SystempayWebservice\StructType\RiskControl $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Restoore\SystempayWebservice\StructType\RiskControl) {
            throw new \InvalidArgumentException(sprintf('The riskControl property can only contain items of \Restoore\SystempayWebservice\StructType\RiskControl, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->riskControl[] = $item;
        return $this;
    }
    /**
     * Get riskAnalysis value
     * @return \Restoore\SystempayWebservice\StructType\RiskAnalysis[]|null
     */
    public function getRiskAnalysis()
    {
        return $this->riskAnalysis;
    }
    /**
     * Set riskAnalysis value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\RiskAnalysis[] $riskAnalysis
     * @return \Restoore\SystempayWebservice\StructType\FraudManagementResponse
     */
    public function setRiskAnalysis(array $riskAnalysis = array())
    {
        foreach ($riskAnalysis as $fraudManagementResponseRiskAnalysisItem) {
            // validation for constraint: itemType
            if (!$fraudManagementResponseRiskAnalysisItem instanceof \Restoore\SystempayWebservice\StructType\RiskAnalysis) {
                throw new \InvalidArgumentException(sprintf('The riskAnalysis property can only contain items of \Restoore\SystempayWebservice\StructType\RiskAnalysis, "%s" given', is_object($fraudManagementResponseRiskAnalysisItem) ? get_class($fraudManagementResponseRiskAnalysisItem) : gettype($fraudManagementResponseRiskAnalysisItem)), __LINE__);
            }
        }
        $this->riskAnalysis = $riskAnalysis;
        return $this;
    }
    /**
     * Add item to riskAnalysis value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\RiskAnalysis $item
     * @return \Restoore\SystempayWebservice\StructType\FraudManagementResponse
     */
    public function addToRiskAnalysis(\Restoore\SystempayWebservice\StructType\RiskAnalysis $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Restoore\SystempayWebservice\StructType\RiskAnalysis) {
            throw new \InvalidArgumentException(sprintf('The riskAnalysis property can only contain items of \Restoore\SystempayWebservice\StructType\RiskAnalysis, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->riskAnalysis[] = $item;
        return $this;
    }
    /**
     * Get riskAssessments value
     * @return \Restoore\SystempayWebservice\StructType\RiskAssessments|null
     */
    public function getRiskAssessments()
    {
        return $this->riskAssessments;
    }
    /**
     * Set riskAssessments value
     * @param \Restoore\SystempayWebservice\StructType\RiskAssessments $riskAssessments
     * @return \Restoore\SystempayWebservice\StructType\FraudManagementResponse
     */
    public function setRiskAssessments(\Restoore\SystempayWebservice\StructType\RiskAssessments $riskAssessments = null)
    {
        $this->riskAssessments = $riskAssessments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\FraudManagementResponse
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
