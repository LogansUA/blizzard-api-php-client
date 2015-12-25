<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

use GuzzleHttp\Psr7\Response;

/**
 * Class WorldOfWarcraftFactory
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class WorldOfWarcraftFactory
{
    /**
     * Get model
     *
     * @param string   $modelType Service model type
     * @param Response $response  Response
     *
     * @return object
     */
    public function getModel($modelType, $response)
    {
        $models = [
            WorldOfWarcraftModel::ACHIEVEMENTS        => new Achievement(),
            WorldOfWarcraftModel::AUCTION_DATA_STATUS => new Auction(),
            WorldOfWarcraftModel::MASTER_LIST         => new Master(),
        ];

        /** @var AbstractModel $model */
        $model = $models[$modelType];

        return $model->initializeObject($response);
    }
}
