<?php

// Include composer autoload file
require_once __DIR__.'/../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key and secret
$client = new \BlizzardApi\BlizzardClient('apiKey', 'apiSecret');

// Create a new Diablo service with configured Blizzard client
$diablo = new \BlizzardApi\Service\Starcraft($client);

// Use API method for getting specific data
$response = $diablo->getProfileUser();

// $response->getStatusCode(); - accessing response status code
// $response->getHeaders(); - accessing response headers

// Show response body
echo $response->getBody();
