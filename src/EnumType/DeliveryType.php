<?php

namespace Restoore\SystempayWebservice\EnumType;

/**
 * This class stands for deliveryType EnumType
 * @subpackage Enumerations
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class DeliveryType
{
    /**
     * Constant for value 'RECLAIM_IN_SHOP'
     * @return string 'RECLAIM_IN_SHOP'
     */
    const VALUE_RECLAIM_IN_SHOP = 'RECLAIM_IN_SHOP';
    /**
     * Constant for value 'RELAY_POINT'
     * @return string 'RELAY_POINT'
     */
    const VALUE_RELAY_POINT = 'RELAY_POINT';
    /**
     * Constant for value 'RECLAIM_IN_STATION'
     * @return string 'RECLAIM_IN_STATION'
     */
    const VALUE_RECLAIM_IN_STATION = 'RECLAIM_IN_STATION';
    /**
     * Constant for value 'PACKAGE_DELIVERY_COMPANY'
     * @return string 'PACKAGE_DELIVERY_COMPANY'
     */
    const VALUE_PACKAGE_DELIVERY_COMPANY = 'PACKAGE_DELIVERY_COMPANY';
    /**
     * Constant for value 'ETICKET'
     * @return string 'ETICKET'
     */
    const VALUE_ETICKET = 'ETICKET';
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
     * @uses self::VALUE_RECLAIM_IN_SHOP
     * @uses self::VALUE_RELAY_POINT
     * @uses self::VALUE_RECLAIM_IN_STATION
     * @uses self::VALUE_PACKAGE_DELIVERY_COMPANY
     * @uses self::VALUE_ETICKET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RECLAIM_IN_SHOP,
            self::VALUE_RELAY_POINT,
            self::VALUE_RECLAIM_IN_STATION,
            self::VALUE_PACKAGE_DELIVERY_COMPANY,
            self::VALUE_ETICKET,
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
