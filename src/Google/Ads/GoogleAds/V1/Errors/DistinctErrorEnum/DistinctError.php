<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/distinct_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\DistinctErrorEnum;

/**
 * Enum describing possible distinct errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.DistinctErrorEnum.DistinctError</code>
 */
class DistinctError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Duplicate element.
     *
     * Generated from protobuf enum <code>DUPLICATE_ELEMENT = 2;</code>
     */
    const DUPLICATE_ELEMENT = 2;
    /**
     * Duplicate type.
     *
     * Generated from protobuf enum <code>DUPLICATE_TYPE = 3;</code>
     */
    const DUPLICATE_TYPE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DistinctError::class, \Google\Ads\GoogleAds\V1\Errors\DistinctErrorEnum_DistinctError::class);
