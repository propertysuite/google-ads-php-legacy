<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/offline_user_data_job_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Errors;

class OfflineUserDataJobError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/ads/googleads/v15/errors/offline_user_data_job_error.protogoogle.ads.googleads.v15.errors"�

OfflineUserDataJobErrorEnum"�

OfflineUserDataJobError
UNSPECIFIED 
UNKNOWN
INVALID_USER_LIST_ID
INVALID_USER_LIST_TYPE 
NOT_ON_ALLOWLIST_FOR_USER_ID! 
INCOMPATIBLE_UPLOAD_KEY_TYPE
MISSING_USER_IDENTIFIER
INVALID_MOBILE_ID_FORMAT
TOO_MANY_USER_IDENTIFIERS	+
\'NOT_ON_ALLOWLIST_FOR_STORE_SALES_DIRECT,
(NOT_ON_ALLOWLIST_FOR_UNIFIED_STORE_SALES 
INVALID_PARTNER_ID
INVALID_ENCODING
INVALID_COUNTRY_CODE 
INCOMPATIBLE_USER_IDENTIFIER
FUTURE_TRANSACTION_TIME
INVALID_CONVERSION_ACTION
MOBILE_ID_NOT_SUPPORTED
INVALID_OPERATION_ORDER
CONFLICTING_OPERATION%
!EXTERNAL_UPDATE_ID_ALREADY_EXISTS
JOB_ALREADY_STARTED
REMOVE_NOT_SUPPORTED
REMOVE_ALL_NOT_SUPPORTED
INVALID_SHA256_FORMAT
CUSTOM_KEY_DISABLED
CUSTOM_KEY_NOT_PREDEFINED
CUSTOM_KEY_NOT_SET-
)CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS:
6ATTRIBUTES_NOT_APPLICABLE_FOR_CUSTOMER_MATCH_USER_LIST"&
"LIFETIME_VALUE_BUCKET_NOT_IN_RANGE#/
+INCOMPATIBLE_USER_IDENTIFIER_FOR_ATTRIBUTES$
FUTURE_TIME_NOT_ALLOWED%1
-LAST_PURCHASE_TIME_LESS_THAN_ACQUISITION_TIME&#
CUSTOMER_IDENTIFIER_NOT_ALLOWED\'
INVALID_ITEM_ID(7
3FIRST_PURCHASE_TIME_GREATER_THAN_LAST_PURCHASE_TIME*
INVALID_LIFECYCLE_STAGE+
INVALID_EVENT_VALUE,+
\'EVENT_ATTRIBUTE_ALL_FIELDS_ARE_REQUIRED-B�
#com.google.ads.googleads.v15.errorsBOfflineUserDataJobErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/errors;errors�GAA�Google.Ads.GoogleAds.V15.Errors�Google\\Ads\\GoogleAds\\V15\\Errors�#Google::Ads::GoogleAds::V15::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

