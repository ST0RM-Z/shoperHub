<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/internal_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class InternalError
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
4google/ads/googleads/v11/errors/internal_error.protogoogle.ads.googleads.v11.errors"�
InternalErrorEnum"�
InternalError
UNSPECIFIED 
UNKNOWN
INTERNAL_ERROR
ERROR_CODE_NOT_PUBLISHED
TRANSIENT_ERROR
DEADLINE_EXCEEDEDB�
#com.google.ads.googleads.v11.errorsBInternalErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

