<?php

require_once __DIR__.'/../vendor/autoload.php';

$client = new \BlizzardApi\BlizzardClient('apiKey', 'locale', 'region');

$diablo = new \BlizzardApi\Service\Diablo($client);

$response = $diablo->getItemDataById('Unique_Shoulder_103_x1');

// Show status code
var_dump($response->getStatusCode());

// Show headers
var_dump($response->getHeaders());

// Show response body
echo $response->getBody();
