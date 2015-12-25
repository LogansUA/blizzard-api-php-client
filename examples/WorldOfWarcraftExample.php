<?php

// Include composer autoload file
require_once __DIR__.'/../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key (locale and region not required)
$client = new \BlizzardApi\BlizzardClient('3hnw3qmca6bnc3x4japefbzhcd86smpr', null, 'ru_RU', 'EU');

// Create a new World Of Warcraft service with configured Blizzard client
$wow = new \BlizzardApi\Service\WorldOfWarcraft($client);

// Use API method for getting specific data
$achievement = $wow->getPetStats(258);

// Object dump
var_dump($achievement);

//// Show status code
//var_dump($achievement->getResponse()->getStatusCode());
//
//// Show headers
//var_dump($achievement->getResponse()->getHeaders());
//
//// Show response body
//echo $achievement->getResponse()->getBody();
