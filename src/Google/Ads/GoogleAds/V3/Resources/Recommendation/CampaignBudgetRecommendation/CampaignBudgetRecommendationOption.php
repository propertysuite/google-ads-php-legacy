<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V3\Resources\Recommendation\CampaignBudgetRecommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The impact estimates for a given budget amount.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.Recommendation.CampaignBudgetRecommendation.CampaignBudgetRecommendationOption</code>
 */
class CampaignBudgetRecommendationOption extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The budget amount for this option.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $budget_amount_micros = null;
    /**
     * Output only. The impact estimate if budget is changed to amount specified in this
     * option.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.Recommendation.RecommendationImpact impact = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $impact = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $budget_amount_micros
     *           Output only. The budget amount for this option.
     *     @type \Google\Ads\GoogleAds\V3\Resources\Recommendation\RecommendationImpact $impact
     *           Output only. The impact estimate if budget is changed to amount specified in this
     *           option.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The budget amount for this option.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getBudgetAmountMicros()
    {
        return $this->budget_amount_micros;
    }

    /**
     * Returns the unboxed value from <code>getBudgetAmountMicros()</code>

     * Output only. The budget amount for this option.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getBudgetAmountMicrosUnwrapped()
    {
        return $this->readWrapperValue("budget_amount_micros");
    }

    /**
     * Output only. The budget amount for this option.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setBudgetAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->budget_amount_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The budget amount for this option.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setBudgetAmountMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("budget_amount_micros", $var);
        return $this;}

    /**
     * Output only. The impact estimate if budget is changed to amount specified in this
     * option.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.Recommendation.RecommendationImpact impact = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\Recommendation\RecommendationImpact
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * Output only. The impact estimate if budget is changed to amount specified in this
     * option.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.Recommendation.RecommendationImpact impact = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\Recommendation\RecommendationImpact $var
     * @return $this
     */
    public function setImpact($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\Recommendation_RecommendationImpact::class);
        $this->impact = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignBudgetRecommendationOption::class, \Google\Ads\GoogleAds\V3\Resources\Recommendation_CampaignBudgetRecommendation_CampaignBudgetRecommendationOption::class);
