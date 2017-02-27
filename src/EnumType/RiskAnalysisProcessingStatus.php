<?php

namespace Restoore\SystempayWebservice\EnumType;

/**
 * This class stands for riskAnalysisProcessingStatus EnumType
 * @subpackage Enumerations
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class RiskAnalysisProcessingStatus
{
    /**
     * Constant for value 'P_TO_SEND'
     * @return string 'P_TO_SEND'
     */
    const VALUE_P_TO_SEND = 'P_TO_SEND';
    /**
     * Constant for value 'P_SEND_KO'
     * @return string 'P_SEND_KO'
     */
    const VALUE_P_SEND_KO = 'P_SEND_KO';
    /**
     * Constant for value 'P_PENDING_AT_ANALYZER'
     * @return string 'P_PENDING_AT_ANALYZER'
     */
    const VALUE_P_PENDING_AT_ANALYZER = 'P_PENDING_AT_ANALYZER';
    /**
     * Constant for value 'P_SEND_OK'
     * @return string 'P_SEND_OK'
     */
    const VALUE_P_SEND_OK = 'P_SEND_OK';
    /**
     * Constant for value 'P_MANUAL'
     * @return string 'P_MANUAL'
     */
    const VALUE_P_MANUAL = 'P_MANUAL';
    /**
     * Constant for value 'P_SKIPPED'
     * @return string 'P_SKIPPED'
     */
    const VALUE_P_SKIPPED = 'P_SKIPPED';
    /**
     * Constant for value 'P_SEND_EXPIRED'
     * @return string 'P_SEND_EXPIRED'
     */
    const VALUE_P_SEND_EXPIRED = 'P_SEND_EXPIRED';
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
     * @uses self::VALUE_P_TO_SEND
     * @uses self::VALUE_P_SEND_KO
     * @uses self::VALUE_P_PENDING_AT_ANALYZER
     * @uses self::VALUE_P_SEND_OK
     * @uses self::VALUE_P_MANUAL
     * @uses self::VALUE_P_SKIPPED
     * @uses self::VALUE_P_SEND_EXPIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_P_TO_SEND,
            self::VALUE_P_SEND_KO,
            self::VALUE_P_PENDING_AT_ANALYZER,
            self::VALUE_P_SEND_OK,
            self::VALUE_P_MANUAL,
            self::VALUE_P_SKIPPED,
            self::VALUE_P_SEND_EXPIRED,
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
