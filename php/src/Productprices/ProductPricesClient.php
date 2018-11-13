<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Productprices;

/**
 */
class ProductPricesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Productprices\ProductPricingContext $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetPrice(\Productprices\ProductPricingContext $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/productprices.ProductPrices/GetPrice',
        $argument,
        ['\Productprices\ProductPricing', 'decode'],
        $metadata, $options);
    }

}
