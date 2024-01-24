<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/value_rule_set_dimension.proto

namespace Google\Ads\GoogleAds\V15\Enums\ValueRuleSetDimensionEnum;

use UnexpectedValueException;

/**
 * Possible dimensions of a conversion value rule set.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.ValueRuleSetDimensionEnum.ValueRuleSetDimension</code>
 */
class ValueRuleSetDimension
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
     * Dimension for geo location.
     *
     * Generated from protobuf enum <code>GEO_LOCATION = 2;</code>
     */
    const GEO_LOCATION = 2;
    /**
     * Dimension for device type.
     *
     * Generated from protobuf enum <code>DEVICE = 3;</code>
     */
    const DEVICE = 3;
    /**
     * Dimension for audience.
     *
     * Generated from protobuf enum <code>AUDIENCE = 4;</code>
     */
    const AUDIENCE = 4;
    /**
     * This dimension implies the rule will always apply.
     *
     * Generated from protobuf enum <code>NO_CONDITION = 5;</code>
     */
    const NO_CONDITION = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::GEO_LOCATION => 'GEO_LOCATION',
        self::DEVICE => 'DEVICE',
        self::AUDIENCE => 'AUDIENCE',
        self::NO_CONDITION => 'NO_CONDITION',
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
class_alias(ValueRuleSetDimension::class, \Google\Ads\GoogleAds\V15\Enums\ValueRuleSetDimensionEnum_ValueRuleSetDimension::class);
