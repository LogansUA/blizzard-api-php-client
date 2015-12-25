<?php

// Include composer autoload file
require_once __DIR__.'/../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key (locale and region not required)
$client = new \BlizzardApi\BlizzardClient('apiKey', 'accessToken', 'locale', 'region');

// Create a new Starcraft service with configured Blizzard client
$starcraft = new \BlizzardApi\Service\Starcraft($client);

// Use API method for getting specific data
$response = $starcraft->getAchievements();

// Show status code
var_dump($response->getStatusCode());

// Show headers
var_dump($response->getHeaders());

// Show response body
echo $response->getBody();
