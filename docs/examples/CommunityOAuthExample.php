<?php

// Include composer autoload file
require_once __DIR__.'/../../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key and secret
$client = new \BlizzardApi\BlizzardClient('apiKey', 'apiSecret');

// Create a new Diablo service with configured Blizzard client
$diablo = new \BlizzardApi\Service\Diablo($client);

// Use API method for getting specific data
$response = $diablo->getProfileUser();

// Accessing response status code
$response->getStatusCode();

// Accessing response headers
$response->getHeaders();

// Show response body
echo $response->getBody();
