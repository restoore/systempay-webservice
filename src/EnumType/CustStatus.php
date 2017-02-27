<?php

namespace Restoore\SystempayWebservice\EnumType;

/**
 * This class stands for custStatus EnumType
 * @subpackage Enumerations
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class CustStatus
{
    /**
     * Constant for value 'PRIVATE'
     * @return string 'PRIVATE'
     */
    const VALUE_PRIVATE = 'PRIVATE';
    /**
     * Constant for value 'COMPANY'
     * @return string 'COMPANY'
     */
    const VALUE_COMPANY = 'COMPANY';
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
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_COMPANY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRIVATE,
            self::VALUE_COMPANY,
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
