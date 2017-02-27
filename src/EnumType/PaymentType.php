<?php

namespace Restoore\SystempayWebservice\EnumType;

/**
 * This class stands for paymentType EnumType
 * @subpackage Enumerations
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class PaymentType
{
    /**
     * Constant for value 'SINGLE'
     * @return string 'SINGLE'
     */
    const VALUE_SINGLE = 'SINGLE';
    /**
     * Constant for value 'INSTALLMENT'
     * @return string 'INSTALLMENT'
     */
    const VALUE_INSTALLMENT = 'INSTALLMENT';
    /**
     * Constant for value 'SPLIT'
     * @return string 'SPLIT'
     */
    const VALUE_SPLIT = 'SPLIT';
    /**
     * Constant for value 'SUBSCRIPTION'
     * @return string 'SUBSCRIPTION'
     */
    const VALUE_SUBSCRIPTION = 'SUBSCRIPTION';
    /**
     * Constant for value 'RETRY'
     * @return string 'RETRY'
     */
    const VALUE_RETRY = 'RETRY';
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
     * @uses self::VALUE_SINGLE
     * @uses self::VALUE_INSTALLMENT
     * @uses self::VALUE_SPLIT
     * @uses self::VALUE_SUBSCRIPTION
     * @uses self::VALUE_RETRY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SINGLE,
            self::VALUE_INSTALLMENT,
            self::VALUE_SPLIT,
            self::VALUE_SUBSCRIPTION,
            self::VALUE_RETRY,
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
