<?php

require_once __DIR__.'/../vendor/autoload.php';

$client = new \BlizzardApi\BlizzardClient('3hnw3qmca6bnc3x4japefbzhcd86smpr', 'ru_RU', 'EU');

$worldOfWarcraft = new \BlizzardApi\Service\WorldOfWarcraft($client);

echo $worldOfWarcraft->getPetAbilityInfo(156);
