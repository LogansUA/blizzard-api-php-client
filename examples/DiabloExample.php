<?php

// Include composer autoload file
require_once __DIR__.'/../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key (locale and region not required)
$client = new \BlizzardApi\BlizzardClient('apiKey', 'locale', 'region');

// Create a new Diablo service with configured Blizzard client
$diablo = new \BlizzardApi\Service\Diablo($client);

// Use API method for getting specific data
$response = $diablo->getItemDataById('Unique_Shoulder_103_x1');

// Show status code
var_dump($response->getStatusCode());

// Show headers
var_dump($response->getHeaders());

// Show response body
echo $response->getBody();
