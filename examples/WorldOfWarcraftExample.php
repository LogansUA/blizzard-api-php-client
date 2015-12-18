<?php

require_once __DIR__.'/../vendor/autoload.php';

$client = new \BlizzardApi\BlizzardClient('3hnw3qmca6bnc3x4japefbzhcd86smpr', 'en_US', 'US');

$wow = new \BlizzardApi\Service\WorldOfWarcraft($client);

$response = $wow->getGuild('test-realm', 'test-guild', [
    'fields' => 'achievements,challenge',
]);

// Show status code
var_dump($response->getStatusCode());

// Show headers
var_dump($response->getHeaders());

// Show response body
echo $response->getBody();

