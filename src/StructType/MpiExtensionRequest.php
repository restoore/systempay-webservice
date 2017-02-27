<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mpiExtensionRequest StructType
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class MpiExtensionRequest extends AbstractStructBase
{
    /**
     * The extensionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\ExtInfo[]
     */
    public $extensionData;
    /**
     * Constructor method for mpiExtensionRequest
     * @uses MpiExtensionRequest::setExtensionData()
     * @param \Restoore\SystempayWebservice\StructType\ExtInfo[] $extensionData
     */
    public function __construct(array $extensionData = array())
    {
        $this
            ->setExtensionData($extensionData);
    }
    /**
     * Get extensionData value
     * @return \Restoore\SystempayWebservice\StructType\ExtInfo[]|null
     */
    public function getExtensionData()
    {
        return $this->extensionData;
    }
    /**
     * Set extensionData value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\ExtInfo[] $extensionData
     * @return \Restoore\SystempayWebservice\StructType\MpiExtensionRequest
     */
    public function setExtensionData(array $extensionData = array())
    {
        foreach ($extensionData as $mpiExtensionRequestExtensionDataItem) {
            // validation for constraint: itemType
            if (!$mpiExtensionRequestExtensionDataItem instanceof \Restoore\SystempayWebservice\StructType\ExtInfo) {
                throw new \InvalidArgumentException(sprintf('The extensionData property can only contain items of \Restoore\SystempayWebservice\StructType\ExtInfo, "%s" given', is_object($mpiExtensionRequestExtensionDataItem) ? get_class($mpiExtensionRequestExtensionDataItem) : gettype($mpiExtensionRequestExtensionDataItem)), __LINE__);
            }
        }
        $this->extensionData = $extensionData;
        return $this;
    }
    /**
     * Add item to extensionData value
     * @throws \InvalidArgumentException
     * @param \Restoore\SystempayWebservice\StructType\ExtInfo $item
     * @return \Restoore\SystempayWebservice\StructType\MpiExtensionRequest
     */
    public function addToExtensionData(\Restoore\SystempayWebservice\StructType\ExtInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Restoore\SystempayWebservice\StructType\ExtInfo) {
            throw new \InvalidArgumentException(sprintf('The extensionData property can only contain items of \Restoore\SystempayWebservice\StructType\ExtInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->extensionData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\MpiExtensionRequest
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
