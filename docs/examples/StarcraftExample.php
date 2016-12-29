<?php

// Include composer autoload file
require_once __DIR__.'/../../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key and secret
$client = new \BlizzardApi\BlizzardClient('apiKey', 'apiSecret');

// Create a new Starcraft service with configured Blizzard client
$starcraft = new \BlizzardApi\Service\Starcraft($client);

// Use API method for getting specific data
$response = $starcraft->getAchievements();

// Accessing response status code
$response->getStatusCode();

// Accessing response headers
$response->getHeaders();

// Show response body
echo $response->getBody();
