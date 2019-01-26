<?php

// Include composer autoload file
require_once __DIR__.'/../../vendor/autoload.php';

// Create a new Blizzard client with registered Blizzard Client ID and Client Secret
$client = new \BlizzardApi\BlizzardClient('clientId', 'clientSecret');

// Create a new GameData service with configured Blizzard client
$gameData = new \BlizzardApi\Service\GameData($client);

// Use API method for getting specific data
$response = $gameData->getEraLeaderboard(1, 'rift-barbarian');

// Accessing response status code
$response->getStatusCode();

// Accessing response headers
$response->getHeaders();

// Show response body
echo $response->getBody();
