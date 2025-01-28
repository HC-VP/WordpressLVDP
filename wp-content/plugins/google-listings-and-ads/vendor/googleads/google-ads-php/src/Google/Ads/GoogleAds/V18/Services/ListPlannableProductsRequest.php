<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list available products in a given location.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.ListPlannableProductsRequest</code>
 */
class ListPlannableProductsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the selected location for planning. To list the
     * available plannable location IDs use
     * [ReachPlanService.ListPlannableLocations][google.ads.googleads.v18.services.ReachPlanService.ListPlannableLocations].
     *
     * Generated from protobuf field <code>string plannable_location_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $plannable_location_id = '';

    /**
     * @param string $plannableLocationId Required. The ID of the selected location for planning. To list the
     *                                    available plannable location IDs use
     *                                    [ReachPlanService.ListPlannableLocations][google.ads.googleads.v18.services.ReachPlanService.ListPlannableLocations].
     *
     * @return \Google\Ads\GoogleAds\V18\Services\ListPlannableProductsRequest
     *
     * @experimental
     */
    public static function build(string $plannableLocationId): self
    {
        return (new self())
            ->setPlannableLocationId($plannableLocationId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plannable_location_id
     *           Required. The ID of the selected location for planning. To list the
     *           available plannable location IDs use
     *           [ReachPlanService.ListPlannableLocations][google.ads.googleads.v18.services.ReachPlanService.ListPlannableLocations].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the selected location for planning. To list the
     * available plannable location IDs use
     * [ReachPlanService.ListPlannableLocations][google.ads.googleads.v18.services.ReachPlanService.ListPlannableLocations].
     *
     * Generated from protobuf field <code>string plannable_location_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPlannableLocationId()
    {
        return $this->plannable_location_id;
    }

    /**
     * Required. The ID of the selected location for planning. To list the
     * available plannable location IDs use
     * [ReachPlanService.ListPlannableLocations][google.ads.googleads.v18.services.ReachPlanService.ListPlannableLocations].
     *
     * Generated from protobuf field <code>string plannable_location_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPlannableLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->plannable_location_id = $var;

        return $this;
    }

}

