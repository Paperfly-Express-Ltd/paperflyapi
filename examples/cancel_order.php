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
    "order_id" => "1f29a9b5-22e2-42cc-91ad-ff23390fd9fb"
];

$result = $pfl->cancelOrder($postData);

echo json_encode($result['response']);
