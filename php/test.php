<?php

use Productprices\PricingContext;
use Productprices\ProductPricesClient;
use Productprices\ProductPricing;
use Productprices\ProductPricingContext;

require_once dirname(__DIR__) . '/php/vendor/autoload.php';

$client = new ProductPricesClient("localhost:10080", [
    "credentials" => null,
]);

$query = new ProductPricingContext();
$query->setProductId(10)->setContext((new PricingContext())->setCountryCode("PL")->setUserId(123));

$result = $client->GetPrice($query);
/** @var ProductPricing[] $response */
$response = $result->wait();

foreach ($response[0]->getCurrencies() as $currency) {
    /** @var ProductPricing\Price $currency */
    echo $currency->getFinalPrice() . " " . $currency->getCurrency() . PHP_EOL;
}
