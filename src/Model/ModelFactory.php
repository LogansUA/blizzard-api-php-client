<?php

namespace BlizzardApi\Model;

use BlizzardApi\Model\WorldOfWarcraft\WorldOfWarcraftFactory;
use GuzzleHttp\Psr7\Response;

/**
 * Class ModelFactory
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class ModelFactory
{
    /**
     * Get factory
     *
     * @param string $serviceType Blizzard service type
     *
     * @return object
     */
    public function getFactory($serviceType)
    {
        $models = [
            BlizzardFactory::WORLD_OF_WARCRAFT => new WorldOfWarcraftFactory(),
        ];

        return $models[$serviceType];
    }
}
