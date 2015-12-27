<?php

// Include composer autoload file
require_once __DIR__.'/../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key
$client = new \BlizzardApi\BlizzardClient('apiKey');

// Create a new World Of Warcraft service with configured Blizzard client
$wow = new \BlizzardApi\Service\WorldOfWarcraft($client);

// Use API method for getting specific data
$response = $wow->getGuild('test-realm', 'test-guild', [
    'fields' => 'achievements,challenge',
]);

// $response->getStatusCode(); - accessing response status code
// $response->getHeaders(); - accessing response headers

// Show response body
echo $response->getBody();
