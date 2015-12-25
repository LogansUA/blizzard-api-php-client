<?php

// Include composer autoload file
require_once __DIR__.'/../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key (locale and region not required)
$client = new \BlizzardApi\BlizzardClient('apiKey', 'accessToken', 'locale', 'region');

// Create a new GameData service with configured Blizzard client
$gameData = new \BlizzardApi\Service\GameData($client);

// Use API method for getting specific data
$response = $gameData->getEraLeaderboard(1, 'rift-barbarian');

// Show status code
var_dump($response->getStatusCode());

// Show headers
var_dump($response->getHeaders());

// Show response body
echo $response->getBody();
