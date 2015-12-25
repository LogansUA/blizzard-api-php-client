<?php

namespace BlizzardApi\Model;

use BlizzardApi\Model\WorldOfWarcraft\WorldOfWarcraftFactory;

/**
 * Class ModelFactory
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class ServiceFactory
{
    const WORLD_OF_WARCRAFT = 'world_of_warcraft';

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
            self::WORLD_OF_WARCRAFT => new WorldOfWarcraftFactory(),
        ];

        return $models[$serviceType];
    }
}
