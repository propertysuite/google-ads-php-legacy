<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/database_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Errors;

class DatabaseError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v15/errors/database_error.protogoogle.ads.googleads.v15.errors"�
DatabaseErrorEnum"�
DatabaseError
UNSPECIFIED 
UNKNOWN
CONCURRENT_MODIFICATION
DATA_CONSTRAINT_VIOLATION
REQUEST_TOO_LARGEB�
#com.google.ads.googleads.v15.errorsBDatabaseErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/errors;errors�GAA�Google.Ads.GoogleAds.V15.Errors�Google\\Ads\\GoogleAds\\V15\\Errors�#Google::Ads::GoogleAds::V15::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

