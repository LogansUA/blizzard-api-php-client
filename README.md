# Blizzard API PHP Client
API client for Blizzard API written in PHP. [Blizzard API Documentation](https://dev.battle.net/io-docs)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/LogansUA/blizzard-api-php-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/LogansUA/blizzard-api-php-client/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/LogansUA/blizzard-api-php-client/badges/build.png?b=master)](https://scrutinizer-ci.com/g/LogansUA/blizzard-api-php-client/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/logansua/blizzard-api-client/v/stable)](https://packagist.org/packages/logansua/blizzard-api-client)
[![Total Downloads](https://poser.pugx.org/logansua/blizzard-api-client/downloads)](https://packagist.org/packages/logansua/blizzard-api-client)
[![Latest Unstable Version](https://poser.pugx.org/logansua/blizzard-api-client/v/unstable)](https://packagist.org/packages/logansua/blizzard-api-client)
[![License](https://poser.pugx.org/logansua/blizzard-api-client/license)](https://packagist.org/packages/logansua/blizzard-api-client)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/b103523d-7f46-4c74-94f9-cf41462b298a/mini.png)](https://insight.sensiolabs.com/projects/b103523d-7f46-4c74-94f9-cf41462b298a)

## Installation
### Method 1
```
php composer.phar require logansua/blizzard-api-php-client
```
This command requires you to have Composer installed globally, as explained
in the [Composer documentation](https://getcomposer.org/doc/00-intro.md).
### Method 2
```
git clone https://github.com/LogansUA/blizzard-api-php-client.git
```

## Basic usage
```PHP
// Include composer autoload file
require_once __DIR__.'/../vendor/autoload.php';

// Create a new Blizzard client with Blizzard API key
$client = new \BlizzardApi\BlizzardClient('apiKey');

// Create a new API service with configured Blizzard client
$diablo = new \BlizzardApi\Service\Diablo($client);

// Use API method for getting specific data
$response = $diablo->getItemDataById('Unique_Shoulder_103_x1');

// Show response body
echo $response->getBody();
```

## List of available API services
* World of Warcraft ([example](https://github.com/LogansUA/blizzard-api-php-client/blob/master/examples/WorldOfWarcraftExample.php))
* Diablo 3 ([example](https://github.com/LogansUA/blizzard-api-php-client/blob/master/examples/DiabloExample.php))
* Starcraft ([example](https://github.com/LogansUA/blizzard-api-php-client/blob/master/examples/StarcraftExample.php))
* Community OAuth ([example](https://github.com/LogansUA/blizzard-api-php-client/blob/master/examples/CommunityOAuthExample.php))
* Game Data ([example](https://github.com/LogansUA/blizzard-api-php-client/blob/master/examples/GameDataExample.php))

## License
This software is published under the [MIT License](https://github.com/LogansUA/blizzard-api-php-client/blob/master/LICENSE)
