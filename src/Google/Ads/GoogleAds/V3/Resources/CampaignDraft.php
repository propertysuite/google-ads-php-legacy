<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/campaign_draft.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign draft.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.CampaignDraft</code>
 */
class CampaignDraft extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the campaign draft.
     * Campaign draft resource names have the form:
     * `customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the draft.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value draft_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $draft_id = null;
    /**
     * Immutable. The base campaign to which the draft belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $base_campaign = null;
    /**
     * The name of the campaign draft.
     * This field is required and should not be empty when creating new
     * campaign drafts.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     */
    protected $name = null;
    /**
     * Output only. Resource name of the Campaign that results from overlaying the draft
     * changes onto the base campaign.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue draft_campaign = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $draft_campaign = null;
    /**
     * Output only. The status of the campaign draft. This field is read-only.
     * When a new campaign draft is added, the status defaults to PROPOSED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.CampaignDraftStatusEnum.CampaignDraftStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. Whether there is an experiment based on this draft currently serving.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_experiment_running = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $has_experiment_running = null;
    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of draft promotion. This is only set if the draft promotion
     * is in progress or finished.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $long_running_operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the campaign draft.
     *           Campaign draft resource names have the form:
     *           `customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}`
     *     @type \Google\Protobuf\Int64Value $draft_id
     *           Output only. The ID of the draft.
     *           This field is read-only.
     *     @type \Google\Protobuf\StringValue $base_campaign
     *           Immutable. The base campaign to which the draft belongs.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the campaign draft.
     *           This field is required and should not be empty when creating new
     *           campaign drafts.
     *           It must not contain any null (code point 0x0), NL line feed
     *           (code point 0xA) or carriage return (code point 0xD) characters.
     *     @type \Google\Protobuf\StringValue $draft_campaign
     *           Output only. Resource name of the Campaign that results from overlaying the draft
     *           changes onto the base campaign.
     *           This field is read-only.
     *     @type int $status
     *           Output only. The status of the campaign draft. This field is read-only.
     *           When a new campaign draft is added, the status defaults to PROPOSED.
     *     @type \Google\Protobuf\BoolValue $has_experiment_running
     *           Output only. Whether there is an experiment based on this draft currently serving.
     *     @type \Google\Protobuf\StringValue $long_running_operation
     *           Output only. The resource name of the long-running operation that can be used to poll
     *           for completion of draft promotion. This is only set if the draft promotion
     *           is in progress or finished.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\CampaignDraft::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the campaign draft.
     * Campaign draft resource names have the form:
     * `customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the campaign draft.
     * Campaign draft resource names have the form:
     * `customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the draft.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value draft_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getDraftId()
    {
        return $this->draft_id;
    }

    /**
     * Returns the unboxed value from <code>getDraftId()</code>

     * Output only. The ID of the draft.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value draft_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getDraftIdUnwrapped()
    {
        return $this->readWrapperValue("draft_id");
    }

    /**
     * Output only. The ID of the draft.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value draft_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setDraftId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->draft_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the draft.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value draft_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setDraftIdUnwrapped($var)
    {
        $this->writeWrapperValue("draft_id", $var);
        return $this;}

    /**
     * Immutable. The base campaign to which the draft belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBaseCampaign()
    {
        return $this->base_campaign;
    }

    /**
     * Returns the unboxed value from <code>getBaseCampaign()</code>

     * Immutable. The base campaign to which the draft belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getBaseCampaignUnwrapped()
    {
        return $this->readWrapperValue("base_campaign");
    }

    /**
     * Immutable. The base campaign to which the draft belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBaseCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->base_campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The base campaign to which the draft belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setBaseCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("base_campaign", $var);
        return $this;}

    /**
     * The name of the campaign draft.
     * This field is required and should not be empty when creating new
     * campaign drafts.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The name of the campaign draft.
     * This field is required and should not be empty when creating new
     * campaign drafts.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * The name of the campaign draft.
     * This field is required and should not be empty when creating new
     * campaign drafts.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the campaign draft.
     * This field is required and should not be empty when creating new
     * campaign drafts.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Output only. Resource name of the Campaign that results from overlaying the draft
     * changes onto the base campaign.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue draft_campaign = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDraftCampaign()
    {
        return $this->draft_campaign;
    }

    /**
     * Returns the unboxed value from <code>getDraftCampaign()</code>

     * Output only. Resource name of the Campaign that results from overlaying the draft
     * changes onto the base campaign.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue draft_campaign = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getDraftCampaignUnwrapped()
    {
        return $this->readWrapperValue("draft_campaign");
    }

    /**
     * Output only. Resource name of the Campaign that results from overlaying the draft
     * changes onto the base campaign.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue draft_campaign = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDraftCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->draft_campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Resource name of the Campaign that results from overlaying the draft
     * changes onto the base campaign.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue draft_campaign = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setDraftCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("draft_campaign", $var);
        return $this;}

    /**
     * Output only. The status of the campaign draft. This field is read-only.
     * When a new campaign draft is added, the status defaults to PROPOSED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.CampaignDraftStatusEnum.CampaignDraftStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the campaign draft. This field is read-only.
     * When a new campaign draft is added, the status defaults to PROPOSED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.CampaignDraftStatusEnum.CampaignDraftStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\CampaignDraftStatusEnum_CampaignDraftStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. Whether there is an experiment based on this draft currently serving.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_experiment_running = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getHasExperimentRunning()
    {
        return $this->has_experiment_running;
    }

    /**
     * Returns the unboxed value from <code>getHasExperimentRunning()</code>

     * Output only. Whether there is an experiment based on this draft currently serving.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_experiment_running = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getHasExperimentRunningUnwrapped()
    {
        return $this->readWrapperValue("has_experiment_running");
    }

    /**
     * Output only. Whether there is an experiment based on this draft currently serving.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_experiment_running = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setHasExperimentRunning($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->has_experiment_running = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Whether there is an experiment based on this draft currently serving.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_experiment_running = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setHasExperimentRunningUnwrapped($var)
    {
        $this->writeWrapperValue("has_experiment_running", $var);
        return $this;}

    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of draft promotion. This is only set if the draft promotion
     * is in progress or finished.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLongRunningOperation()
    {
        return $this->long_running_operation;
    }

    /**
     * Returns the unboxed value from <code>getLongRunningOperation()</code>

     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of draft promotion. This is only set if the draft promotion
     * is in progress or finished.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getLongRunningOperationUnwrapped()
    {
        return $this->readWrapperValue("long_running_operation");
    }

    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of draft promotion. This is only set if the draft promotion
     * is in progress or finished.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLongRunningOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->long_running_operation = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of draft promotion. This is only set if the draft promotion
     * is in progress or finished.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setLongRunningOperationUnwrapped($var)
    {
        $this->writeWrapperValue("long_running_operation", $var);
        return $this;}

}
