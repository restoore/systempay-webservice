<?php

namespace Restoore\SystempayWebservice\EnumType;

/**
 * This class stands for productType EnumType
 * @subpackage Enumerations
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class ProductType
{
    /**
     * Constant for value 'FOOD_AND_GROCERY'
     * @return string 'FOOD_AND_GROCERY'
     */
    const VALUE_FOOD_AND_GROCERY = 'FOOD_AND_GROCERY';
    /**
     * Constant for value 'AUTOMOTIVE'
     * @return string 'AUTOMOTIVE'
     */
    const VALUE_AUTOMOTIVE = 'AUTOMOTIVE';
    /**
     * Constant for value 'ENTERTAINMENT'
     * @return string 'ENTERTAINMENT'
     */
    const VALUE_ENTERTAINMENT = 'ENTERTAINMENT';
    /**
     * Constant for value 'HOME_AND_GARDEN'
     * @return string 'HOME_AND_GARDEN'
     */
    const VALUE_HOME_AND_GARDEN = 'HOME_AND_GARDEN';
    /**
     * Constant for value 'HOME_APPLIANCE'
     * @return string 'HOME_APPLIANCE'
     */
    const VALUE_HOME_APPLIANCE = 'HOME_APPLIANCE';
    /**
     * Constant for value 'AUCTION_AND_GROUP_BUYING'
     * @return string 'AUCTION_AND_GROUP_BUYING'
     */
    const VALUE_AUCTION_AND_GROUP_BUYING = 'AUCTION_AND_GROUP_BUYING';
    /**
     * Constant for value 'FLOWERS_AND_GIFTS'
     * @return string 'FLOWERS_AND_GIFTS'
     */
    const VALUE_FLOWERS_AND_GIFTS = 'FLOWERS_AND_GIFTS';
    /**
     * Constant for value 'COMPUTER_AND_SOFTWARE'
     * @return string 'COMPUTER_AND_SOFTWARE'
     */
    const VALUE_COMPUTER_AND_SOFTWARE = 'COMPUTER_AND_SOFTWARE';
    /**
     * Constant for value 'HEALTH_AND_BEAUTY'
     * @return string 'HEALTH_AND_BEAUTY'
     */
    const VALUE_HEALTH_AND_BEAUTY = 'HEALTH_AND_BEAUTY';
    /**
     * Constant for value 'SERVICE_FOR_INDIVIDUAL'
     * @return string 'SERVICE_FOR_INDIVIDUAL'
     */
    const VALUE_SERVICE_FOR_INDIVIDUAL = 'SERVICE_FOR_INDIVIDUAL';
    /**
     * Constant for value 'SERVICE_FOR_BUSINESS'
     * @return string 'SERVICE_FOR_BUSINESS'
     */
    const VALUE_SERVICE_FOR_BUSINESS = 'SERVICE_FOR_BUSINESS';
    /**
     * Constant for value 'SPORTS'
     * @return string 'SPORTS'
     */
    const VALUE_SPORTS = 'SPORTS';
    /**
     * Constant for value 'CLOTHING_AND_ACCESSORIES'
     * @return string 'CLOTHING_AND_ACCESSORIES'
     */
    const VALUE_CLOTHING_AND_ACCESSORIES = 'CLOTHING_AND_ACCESSORIES';
    /**
     * Constant for value 'TRAVEL'
     * @return string 'TRAVEL'
     */
    const VALUE_TRAVEL = 'TRAVEL';
    /**
     * Constant for value 'HOME_AUDIO_PHOTO_VIDEO'
     * @return string 'HOME_AUDIO_PHOTO_VIDEO'
     */
    const VALUE_HOME_AUDIO_PHOTO_VIDEO = 'HOME_AUDIO_PHOTO_VIDEO';
    /**
     * Constant for value 'TELEPHONY'
     * @return string 'TELEPHONY'
     */
    const VALUE_TELEPHONY = 'TELEPHONY';
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
     * @uses self::VALUE_FOOD_AND_GROCERY
     * @uses self::VALUE_AUTOMOTIVE
     * @uses self::VALUE_ENTERTAINMENT
     * @uses self::VALUE_HOME_AND_GARDEN
     * @uses self::VALUE_HOME_APPLIANCE
     * @uses self::VALUE_AUCTION_AND_GROUP_BUYING
     * @uses self::VALUE_FLOWERS_AND_GIFTS
     * @uses self::VALUE_COMPUTER_AND_SOFTWARE
     * @uses self::VALUE_HEALTH_AND_BEAUTY
     * @uses self::VALUE_SERVICE_FOR_INDIVIDUAL
     * @uses self::VALUE_SERVICE_FOR_BUSINESS
     * @uses self::VALUE_SPORTS
     * @uses self::VALUE_CLOTHING_AND_ACCESSORIES
     * @uses self::VALUE_TRAVEL
     * @uses self::VALUE_HOME_AUDIO_PHOTO_VIDEO
     * @uses self::VALUE_TELEPHONY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FOOD_AND_GROCERY,
            self::VALUE_AUTOMOTIVE,
            self::VALUE_ENTERTAINMENT,
            self::VALUE_HOME_AND_GARDEN,
            self::VALUE_HOME_APPLIANCE,
            self::VALUE_AUCTION_AND_GROUP_BUYING,
            self::VALUE_FLOWERS_AND_GIFTS,
            self::VALUE_COMPUTER_AND_SOFTWARE,
            self::VALUE_HEALTH_AND_BEAUTY,
            self::VALUE_SERVICE_FOR_INDIVIDUAL,
            self::VALUE_SERVICE_FOR_BUSINESS,
            self::VALUE_SPORTS,
            self::VALUE_CLOTHING_AND_ACCESSORIES,
            self::VALUE_TRAVEL,
            self::VALUE_HOME_AUDIO_PHOTO_VIDEO,
            self::VALUE_TELEPHONY,
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
