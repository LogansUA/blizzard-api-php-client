<?php

// Include composer autoload file
require_once __DIR__.'/../../vendor/autoload.php';

// Create a new Blizzard client with registered Blizzard Client ID and Client Secret
$client = new \BlizzardApi\BlizzardClient('clientId', 'clientSecret');

// Create a new World Of Warcraft service with configured Blizzard client
$wow = new \BlizzardApi\Service\WorldOfWarcraft($client);

// Use API method for getting specific data
$response = $wow->getGuildProfile('test-realm', 'test-guild', implode(',', ['achievements', 'challenge']));

// Accessing response status code
$response->getStatusCode();

// Accessing response headers
$response->getHeaders();

// Show response body
echo $response->getBody();
