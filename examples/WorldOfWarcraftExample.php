<?php

// Include composer autoload file
require_once __DIR__.'/../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key
$client = new \BlizzardApi\BlizzardClient('3hnw3qmca6bnc3x4japefbzhcd86smpr', 'eu', 'ru_ru');

// Create a new World Of Warcraft service with configured Blizzard client
$wow = new \BlizzardApi\Service\WorldOfWarcraft($client->setAccessToken('accessToken'));

// Use API method for getting specific data
$achievement = $wow->getGuild('Седогрив', 'Грааль', 'members,achievements,news,challenge');

// $achievement->getResponse()->getStatusCode(); - accessing response status code
// $achievement->getResponse()->getHeaders(); - accessing response headers

// Show response body
echo $achievement->getResponse()->getBody();

echo $achievement->getDescription();
