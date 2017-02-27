<?php

namespace Restoore\SystempayWebservice\EnumType;

/**
 * This class stands for threeDSMode EnumType
 * @subpackage Enumerations
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ThreeDSMode
{
    /**
     * Constant for value 'DISABLED'
     * @return string 'DISABLED'
     */
    const VALUE_DISABLED = 'DISABLED';
    /**
     * Constant for value 'ENABLED_CREATE'
     * @return string 'ENABLED_CREATE'
     */
    const VALUE_ENABLED_CREATE = 'ENABLED_CREATE';
    /**
     * Constant for value 'ENABLED_FINALIZE'
     * @return string 'ENABLED_FINALIZE'
     */
    const VALUE_ENABLED_FINALIZE = 'ENABLED_FINALIZE';
    /**
     * Constant for value 'MERCHANT_3DS'
     * @return string 'MERCHANT_3DS'
     */
    const VALUE_MERCHANT_3_DS = 'MERCHANT_3DS';
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
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_ENABLED_CREATE
     * @uses self::VALUE_ENABLED_FINALIZE
     * @uses self::VALUE_MERCHANT_3_DS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_ENABLED_CREATE,
            self::VALUE_ENABLED_FINALIZE,
            self::VALUE_MERCHANT_3_DS,
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
