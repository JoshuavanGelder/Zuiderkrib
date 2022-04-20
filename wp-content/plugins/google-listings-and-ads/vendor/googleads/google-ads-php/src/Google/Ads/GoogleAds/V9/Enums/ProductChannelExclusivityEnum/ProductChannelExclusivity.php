<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/product_channel_exclusivity.proto

namespace Google\Ads\GoogleAds\V9\Enums\ProductChannelExclusivityEnum;

use UnexpectedValueException;

/**
 * Enum describing the availability of a product offer.
 *
 * Protobuf type <code>google.ads.googleads.v9.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity</code>
 */
class ProductChannelExclusivity
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The item is sold through one channel only, either local stores or online
     * as indicated by its ProductChannel.
     *
     * Generated from protobuf enum <code>SINGLE_CHANNEL = 2;</code>
     */
    const SINGLE_CHANNEL = 2;
    /**
     * The item is matched to its online or local stores counterpart, indicating
     * it is available for purchase in both ShoppingProductChannels.
     *
     * Generated from protobuf enum <code>MULTI_CHANNEL = 3;</code>
     */
    const MULTI_CHANNEL = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::SINGLE_CHANNEL => 'SINGLE_CHANNEL',
        self::MULTI_CHANNEL => 'MULTI_CHANNEL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductChannelExclusivity::class, \Google\Ads\GoogleAds\V9\Enums\ProductChannelExclusivityEnum_ProductChannelExclusivity::class);

