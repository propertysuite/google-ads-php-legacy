<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/customer_extension_setting_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Services;

class CustomerExtensionSettingService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v12/enums/extension_setting_device.protogoogle.ads.googleads.v12.enums"m
ExtensionSettingDeviceEnum"O
ExtensionSettingDevice
UNSPECIFIED 
UNKNOWN

MOBILE
DESKTOPB�
"com.google.ads.googleads.v12.enumsBExtensionSettingDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
3google/ads/googleads/v12/enums/extension_type.protogoogle.ads.googleads.v12.enums"�
ExtensionTypeEnum"�
ExtensionType
UNSPECIFIED 
UNKNOWN
NONE
APP
CALL
CALLOUT
MESSAGE	
PRICE
	PROMOTION
SITELINK

STRUCTURED_SNIPPET
LOCATION
AFFILIATE_LOCATION
HOTEL_CALLOUT	
IMAGEB�
"com.google.ads.googleads.v12.enumsBExtensionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
:google/ads/googleads/v12/enums/response_content_type.protogoogle.ads.googleads.v12.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v12.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
Cgoogle/ads/googleads/v12/resources/customer_extension_setting.proto"google.ads.googleads.v12.resources3google/ads/googleads/v12/enums/extension_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerExtensionSettingP
resource_name (	B9�A�A3
1googleads.googleapis.com/CustomerExtensionSetting\\
extension_type (2?.google.ads.googleads.v12.enums.ExtensionTypeEnum.ExtensionTypeB�AM
extension_feed_items (	B/�A,
*googleads.googleapis.com/ExtensionFeedItema
device (2Q.google.ads.googleads.v12.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice:z�Aw
1googleads.googleapis.com/CustomerExtensionSettingBcustomers/{customer_id}/customerExtensionSettings/{extension_type}B�
&com.google.ads.googleads.v12.resourcesBCustomerExtensionSettingProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v12/resources;resources�GAA�"Google.Ads.GoogleAds.V12.Resources�"Google\\Ads\\GoogleAds\\V12\\Resources�&Google::Ads::GoogleAds::V12::Resourcesbproto3
�
Jgoogle/ads/googleads/v12/services/customer_extension_setting_service.proto!google.ads.googleads.v12.servicesCgoogle/ads/googleads/v12/resources/customer_extension_setting.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
&MutateCustomerExtensionSettingsRequest
customer_id (	B�A]

operations (2D.google.ads.googleads.v12.services.CustomerExtensionSettingOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v12.enums.ResponseContentTypeEnum.ResponseContentType"�
!CustomerExtensionSettingOperation/
update_mask (2.google.protobuf.FieldMaskN
create (2<.google.ads.googleads.v12.resources.CustomerExtensionSettingH N
update (2<.google.ads.googleads.v12.resources.CustomerExtensionSettingH H
remove (	B6�A3
1googleads.googleapis.com/CustomerExtensionSettingH B
	operation"�
\'MutateCustomerExtensionSettingsResponse1
partial_failure_error (2.google.rpc.StatusX
results (2G.google.ads.googleads.v12.services.MutateCustomerExtensionSettingResult"�
$MutateCustomerExtensionSettingResultM
resource_name (	B6�A3
1googleads.googleapis.com/CustomerExtensionSetting`
customer_extension_setting (2<.google.ads.googleads.v12.resources.CustomerExtensionSetting2�
CustomerExtensionSettingService�
MutateCustomerExtensionSettingsI.google.ads.googleads.v12.services.MutateCustomerExtensionSettingsRequestJ.google.ads.googleads.v12.services.MutateCustomerExtensionSettingsResponse"c���D"?/v12/customers/{customer_id=*}/customerExtensionSettings:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v12.servicesB$CustomerExtensionSettingServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v12/services;services�GAA�!Google.Ads.GoogleAds.V12.Services�!Google\\Ads\\GoogleAds\\V12\\Services�%Google::Ads::GoogleAds::V12::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

