<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__.'./vendor/autoload.php';

use Paperfly\PaperflyApi\PaperflyApi;
use Paperfly\PaperflyApi\DotEnv;

(new DotEnv(__DIR__ . '/.env'))->load();

$result = [];
$base_url = getenv('BASE_URL');
$pfl_key = getenv('PAPERFLY_API_KEY');
$username = getenv('USERNAME');
$password = getenv('PASSWORD');

$pfl = new PaperflyApi();
$pfl->setBaseUrl($base_url);
$pfl->setApiKey($pfl_key);
$pfl->setUserName($username);
$pfl->setPassword($password);

$postData = [
    "merOrderRef" => "09913-012",
        "pickMerchantName" => "ghdhdh",
        "pickMerchantAddress" => "hdhdsggs",
        "pickMerchantThana" => "Adabor",
        "pickMerchantDistrict" => "Dhaka",
        "pickupMerchantPhone" => "01799676190",
        "productSizeWeight" => "standard",
        "productBrief" => "testOrderAPIV2",
        "packagePrice" => "100",
        "max_weight" => "1",
        "deliveryOption" => "regular",
        "custname" => "Test API V2 Name",
        "custaddress" => "Test Order V2 Address",
        "customerThana" => "Patiya",
        "customerDistrict" => "Chittagong",
        "custPhone" => "01678200124"
];

$result = $pfl->placeOrder($postData);

echo json_encode($result['response']);
