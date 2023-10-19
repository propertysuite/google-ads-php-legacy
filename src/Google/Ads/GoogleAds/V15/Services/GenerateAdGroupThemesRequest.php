<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeywordPlanIdeaService.GenerateAdGroupThemes][google.ads.googleads.v15.services.KeywordPlanIdeaService.GenerateAdGroupThemes].
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.GenerateAdGroupThemesRequest</code>
 */
class GenerateAdGroupThemesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. A list of keywords to group into the provided AdGroups.
     *
     * Generated from protobuf field <code>repeated string keywords = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $keywords;
    /**
     * Required. A list of resource names of AdGroups to group keywords into.
     *  Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>repeated string ad_groups = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ad_groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $keywords
     *           Required. A list of keywords to group into the provided AdGroups.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ad_groups
     *           Required. A list of resource names of AdGroups to group keywords into.
     *            Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. A list of keywords to group into the provided AdGroups.
     *
     * Generated from protobuf field <code>repeated string keywords = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Required. A list of keywords to group into the provided AdGroups.
     *
     * Generated from protobuf field <code>repeated string keywords = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeywords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->keywords = $arr;

        return $this;
    }

    /**
     * Required. A list of resource names of AdGroups to group keywords into.
     *  Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>repeated string ad_groups = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdGroups()
    {
        return $this->ad_groups;
    }

    /**
     * Required. A list of resource names of AdGroups to group keywords into.
     *  Resource name format: `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>repeated string ad_groups = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ad_groups = $arr;

        return $this;
    }

}

