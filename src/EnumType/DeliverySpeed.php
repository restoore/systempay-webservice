<?php

namespace Restoore\SystempayWebservice\EnumType;

/**
 * This class stands for deliverySpeed EnumType
 * @subpackage Enumerations
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class DeliverySpeed
{
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
    /**
     * Constant for value 'EXPRESS'
     * @return string 'EXPRESS'
     */
    const VALUE_EXPRESS = 'EXPRESS';
    /**
     * Constant for value 'PRIORITY'
     * @return string 'PRIORITY'
     */
    const VALUE_PRIORITY = 'PRIORITY';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_EXPRESS
     * @uses self::VALUE_PRIORITY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STANDARD,
            self::VALUE_EXPRESS,
            self::VALUE_PRIORITY,
        );
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
