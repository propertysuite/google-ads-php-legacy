<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/ad_group_criterion_error.proto

namespace Google\Ads\GoogleAds\V15\Errors\AdGroupCriterionErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible ad group criterion errors.
 *
 * Protobuf type <code>google.ads.googleads.v15.errors.AdGroupCriterionErrorEnum.AdGroupCriterionError</code>
 */
class AdGroupCriterionError
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
     * No link found between the AdGroupCriterion and the label.
     *
     * Generated from protobuf enum <code>AD_GROUP_CRITERION_LABEL_DOES_NOT_EXIST = 2;</code>
     */
    const AD_GROUP_CRITERION_LABEL_DOES_NOT_EXIST = 2;
    /**
     * The label has already been attached to the AdGroupCriterion.
     *
     * Generated from protobuf enum <code>AD_GROUP_CRITERION_LABEL_ALREADY_EXISTS = 3;</code>
     */
    const AD_GROUP_CRITERION_LABEL_ALREADY_EXISTS = 3;
    /**
     * Negative AdGroupCriterion cannot have labels.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_LABEL_TO_NEGATIVE_CRITERION = 4;</code>
     */
    const CANNOT_ADD_LABEL_TO_NEGATIVE_CRITERION = 4;
    /**
     * Too many operations for a single call.
     *
     * Generated from protobuf enum <code>TOO_MANY_OPERATIONS = 5;</code>
     */
    const TOO_MANY_OPERATIONS = 5;
    /**
     * Negative ad group criteria are not updateable.
     *
     * Generated from protobuf enum <code>CANT_UPDATE_NEGATIVE = 6;</code>
     */
    const CANT_UPDATE_NEGATIVE = 6;
    /**
     * Concrete type of criterion (keyword v.s. placement) is required for ADD
     * and SET operations.
     *
     * Generated from protobuf enum <code>CONCRETE_TYPE_REQUIRED = 7;</code>
     */
    const CONCRETE_TYPE_REQUIRED = 7;
    /**
     * Bid is incompatible with ad group's bidding settings.
     *
     * Generated from protobuf enum <code>BID_INCOMPATIBLE_WITH_ADGROUP = 8;</code>
     */
    const BID_INCOMPATIBLE_WITH_ADGROUP = 8;
    /**
     * Cannot target and exclude the same criterion at once.
     *
     * Generated from protobuf enum <code>CANNOT_TARGET_AND_EXCLUDE = 9;</code>
     */
    const CANNOT_TARGET_AND_EXCLUDE = 9;
    /**
     * The URL of a placement is invalid.
     *
     * Generated from protobuf enum <code>ILLEGAL_URL = 10;</code>
     */
    const ILLEGAL_URL = 10;
    /**
     * Keyword text was invalid.
     *
     * Generated from protobuf enum <code>INVALID_KEYWORD_TEXT = 11;</code>
     */
    const INVALID_KEYWORD_TEXT = 11;
    /**
     * Destination URL was invalid.
     *
     * Generated from protobuf enum <code>INVALID_DESTINATION_URL = 12;</code>
     */
    const INVALID_DESTINATION_URL = 12;
    /**
     * The destination url must contain at least one tag (for example, {lpurl})
     *
     * Generated from protobuf enum <code>MISSING_DESTINATION_URL_TAG = 13;</code>
     */
    const MISSING_DESTINATION_URL_TAG = 13;
    /**
     * Keyword-level cpm bid is not supported
     *
     * Generated from protobuf enum <code>KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM = 14;</code>
     */
    const KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM = 14;
    /**
     * For example, cannot add a biddable ad group criterion that had been
     * removed.
     *
     * Generated from protobuf enum <code>INVALID_USER_STATUS = 15;</code>
     */
    const INVALID_USER_STATUS = 15;
    /**
     * Criteria type cannot be targeted for the ad group. Either the account is
     * restricted to keywords only, the criteria type is incompatible with the
     * campaign's bidding strategy, or the criteria type can only be applied to
     * campaigns.
     *
     * Generated from protobuf enum <code>CANNOT_ADD_CRITERIA_TYPE = 16;</code>
     */
    const CANNOT_ADD_CRITERIA_TYPE = 16;
    /**
     * Criteria type cannot be excluded for the ad group. Refer to the
     * documentation for a specific criterion to check if it is excludable.
     *
     * Generated from protobuf enum <code>CANNOT_EXCLUDE_CRITERIA_TYPE = 17;</code>
     */
    const CANNOT_EXCLUDE_CRITERIA_TYPE = 17;
    /**
     * Partial failure is not supported for shopping campaign mutate operations.
     *
     * Generated from protobuf enum <code>CAMPAIGN_TYPE_NOT_COMPATIBLE_WITH_PARTIAL_FAILURE = 27;</code>
     */
    const CAMPAIGN_TYPE_NOT_COMPATIBLE_WITH_PARTIAL_FAILURE = 27;
    /**
     * Operations in the mutate request changes too many shopping ad groups.
     * Split requests for multiple shopping ad groups across multiple
     * requests.
     *
     * Generated from protobuf enum <code>OPERATIONS_FOR_TOO_MANY_SHOPPING_ADGROUPS = 28;</code>
     */
    const OPERATIONS_FOR_TOO_MANY_SHOPPING_ADGROUPS = 28;
    /**
     * Not allowed to modify url fields of an ad group criterion if there are
     * duplicate elements for that ad group criterion in the request.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_URL_FIELDS_WITH_DUPLICATE_ELEMENTS = 29;</code>
     */
    const CANNOT_MODIFY_URL_FIELDS_WITH_DUPLICATE_ELEMENTS = 29;
    /**
     * Cannot set url fields without also setting final urls.
     *
     * Generated from protobuf enum <code>CANNOT_SET_WITHOUT_FINAL_URLS = 30;</code>
     */
    const CANNOT_SET_WITHOUT_FINAL_URLS = 30;
    /**
     * Cannot clear final urls if final mobile urls exist.
     *
     * Generated from protobuf enum <code>CANNOT_CLEAR_FINAL_URLS_IF_FINAL_MOBILE_URLS_EXIST = 31;</code>
     */
    const CANNOT_CLEAR_FINAL_URLS_IF_FINAL_MOBILE_URLS_EXIST = 31;
    /**
     * Cannot clear final urls if final app urls exist.
     *
     * Generated from protobuf enum <code>CANNOT_CLEAR_FINAL_URLS_IF_FINAL_APP_URLS_EXIST = 32;</code>
     */
    const CANNOT_CLEAR_FINAL_URLS_IF_FINAL_APP_URLS_EXIST = 32;
    /**
     * Cannot clear final urls if tracking url template exists.
     *
     * Generated from protobuf enum <code>CANNOT_CLEAR_FINAL_URLS_IF_TRACKING_URL_TEMPLATE_EXISTS = 33;</code>
     */
    const CANNOT_CLEAR_FINAL_URLS_IF_TRACKING_URL_TEMPLATE_EXISTS = 33;
    /**
     * Cannot clear final urls if url custom parameters exist.
     *
     * Generated from protobuf enum <code>CANNOT_CLEAR_FINAL_URLS_IF_URL_CUSTOM_PARAMETERS_EXIST = 34;</code>
     */
    const CANNOT_CLEAR_FINAL_URLS_IF_URL_CUSTOM_PARAMETERS_EXIST = 34;
    /**
     * Cannot set both destination url and final urls.
     *
     * Generated from protobuf enum <code>CANNOT_SET_BOTH_DESTINATION_URL_AND_FINAL_URLS = 35;</code>
     */
    const CANNOT_SET_BOTH_DESTINATION_URL_AND_FINAL_URLS = 35;
    /**
     * Cannot set both destination url and tracking url template.
     *
     * Generated from protobuf enum <code>CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE = 36;</code>
     */
    const CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE = 36;
    /**
     * Final urls are not supported for this criterion type.
     *
     * Generated from protobuf enum <code>FINAL_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE = 37;</code>
     */
    const FINAL_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE = 37;
    /**
     * Final mobile urls are not supported for this criterion type.
     *
     * Generated from protobuf enum <code>FINAL_MOBILE_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE = 38;</code>
     */
    const FINAL_MOBILE_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE = 38;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::AD_GROUP_CRITERION_LABEL_DOES_NOT_EXIST => 'AD_GROUP_CRITERION_LABEL_DOES_NOT_EXIST',
        self::AD_GROUP_CRITERION_LABEL_ALREADY_EXISTS => 'AD_GROUP_CRITERION_LABEL_ALREADY_EXISTS',
        self::CANNOT_ADD_LABEL_TO_NEGATIVE_CRITERION => 'CANNOT_ADD_LABEL_TO_NEGATIVE_CRITERION',
        self::TOO_MANY_OPERATIONS => 'TOO_MANY_OPERATIONS',
        self::CANT_UPDATE_NEGATIVE => 'CANT_UPDATE_NEGATIVE',
        self::CONCRETE_TYPE_REQUIRED => 'CONCRETE_TYPE_REQUIRED',
        self::BID_INCOMPATIBLE_WITH_ADGROUP => 'BID_INCOMPATIBLE_WITH_ADGROUP',
        self::CANNOT_TARGET_AND_EXCLUDE => 'CANNOT_TARGET_AND_EXCLUDE',
        self::ILLEGAL_URL => 'ILLEGAL_URL',
        self::INVALID_KEYWORD_TEXT => 'INVALID_KEYWORD_TEXT',
        self::INVALID_DESTINATION_URL => 'INVALID_DESTINATION_URL',
        self::MISSING_DESTINATION_URL_TAG => 'MISSING_DESTINATION_URL_TAG',
        self::KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM => 'KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM',
        self::INVALID_USER_STATUS => 'INVALID_USER_STATUS',
        self::CANNOT_ADD_CRITERIA_TYPE => 'CANNOT_ADD_CRITERIA_TYPE',
        self::CANNOT_EXCLUDE_CRITERIA_TYPE => 'CANNOT_EXCLUDE_CRITERIA_TYPE',
        self::CAMPAIGN_TYPE_NOT_COMPATIBLE_WITH_PARTIAL_FAILURE => 'CAMPAIGN_TYPE_NOT_COMPATIBLE_WITH_PARTIAL_FAILURE',
        self::OPERATIONS_FOR_TOO_MANY_SHOPPING_ADGROUPS => 'OPERATIONS_FOR_TOO_MANY_SHOPPING_ADGROUPS',
        self::CANNOT_MODIFY_URL_FIELDS_WITH_DUPLICATE_ELEMENTS => 'CANNOT_MODIFY_URL_FIELDS_WITH_DUPLICATE_ELEMENTS',
        self::CANNOT_SET_WITHOUT_FINAL_URLS => 'CANNOT_SET_WITHOUT_FINAL_URLS',
        self::CANNOT_CLEAR_FINAL_URLS_IF_FINAL_MOBILE_URLS_EXIST => 'CANNOT_CLEAR_FINAL_URLS_IF_FINAL_MOBILE_URLS_EXIST',
        self::CANNOT_CLEAR_FINAL_URLS_IF_FINAL_APP_URLS_EXIST => 'CANNOT_CLEAR_FINAL_URLS_IF_FINAL_APP_URLS_EXIST',
        self::CANNOT_CLEAR_FINAL_URLS_IF_TRACKING_URL_TEMPLATE_EXISTS => 'CANNOT_CLEAR_FINAL_URLS_IF_TRACKING_URL_TEMPLATE_EXISTS',
        self::CANNOT_CLEAR_FINAL_URLS_IF_URL_CUSTOM_PARAMETERS_EXIST => 'CANNOT_CLEAR_FINAL_URLS_IF_URL_CUSTOM_PARAMETERS_EXIST',
        self::CANNOT_SET_BOTH_DESTINATION_URL_AND_FINAL_URLS => 'CANNOT_SET_BOTH_DESTINATION_URL_AND_FINAL_URLS',
        self::CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE => 'CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE',
        self::FINAL_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE => 'FINAL_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE',
        self::FINAL_MOBILE_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE => 'FINAL_MOBILE_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE',
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
class_alias(AdGroupCriterionError::class, \Google\Ads\GoogleAds\V15\Errors\AdGroupCriterionErrorEnum_AdGroupCriterionError::class);

