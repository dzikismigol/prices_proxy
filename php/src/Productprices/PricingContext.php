<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: pricesproxy/prices_proxy.proto

namespace Productprices;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>productprices.PricingContext</code>
 */
class PricingContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 userId = 1;</code>
     */
    private $userId = 0;
    /**
     * Generated from protobuf field <code>string countryCode = 2;</code>
     */
    private $countryCode = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $userId
     *     @type string $countryCode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Pricesproxy\PricesProxy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 userId = 1;</code>
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Generated from protobuf field <code>int32 userId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt32($var);
        $this->userId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string countryCode = 2;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Generated from protobuf field <code>string countryCode = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->countryCode = $var;

        return $this;
    }

}
