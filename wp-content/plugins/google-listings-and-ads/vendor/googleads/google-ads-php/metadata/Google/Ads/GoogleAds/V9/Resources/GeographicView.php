<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/geographic_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Resources;

class GeographicView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v9/enums/geo_targeting_type.protogoogle.ads.googleads.v9.enums"x
GeoTargetingTypeEnum"`
GeoTargetingType
UNSPECIFIED 
UNKNOWN
AREA_OF_INTEREST
LOCATION_OF_PRESENCEB�
!com.google.ads.googleads.v9.enumsBGeoTargetingTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
7google/ads/googleads/v9/resources/geographic_view.proto!google.ads.googleads.v9.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
GeographicViewF
resource_name (	B/�A�A)
\'googleads.googleapis.com/GeographicView`
location_type (2D.google.ads.googleads.v9.enums.GeoTargetingTypeEnum.GeoTargetingTypeB�A&
country_criterion_id (B�AH �:|�Ay
\'googleads.googleapis.com/GeographicViewNcustomers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}B
_country_criterion_idB�
%com.google.ads.googleads.v9.resourcesBGeographicViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

