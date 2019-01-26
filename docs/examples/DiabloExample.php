<?php

// Include composer autoload file
require_once __DIR__.'/../../vendor/autoload.php';

// Create a new Blizzard client with registered Blizzard Client ID and Client Secret
$client = new \BlizzardApi\BlizzardClient('clientId', 'clientSecret');

// Create a new Diablo service with configured Blizzard client
$diablo = new \BlizzardApi\Service\Diablo($client);

// Use API method for getting specific data
$response = $diablo->getItemDataById('Unique_Shoulder_103_x1');

// Accessing response status code
$response->getStatusCode();

// Accessing response headers
$response->getHeaders();

// Show response body
echo $response->getBody();
