<?php

namespace BlizzardApi\Model\WorldOfWarcraft;

use BlizzardApi\Model\WorldOfWarcraft\Achievement\Achievement;
use BlizzardApi\Model\WorldOfWarcraft\Auction\Auction;
use BlizzardApi\Model\WorldOfWarcraft\Boss\Boss;
use BlizzardApi\Model\WorldOfWarcraft\Boss\BossList;
use BlizzardApi\Model\WorldOfWarcraft\ChallengeMode\Leaderboard;
use BlizzardApi\Model\WorldOfWarcraft\Item\Item;
use BlizzardApi\Model\WorldOfWarcraft\Item\ItemSet;
use BlizzardApi\Model\WorldOfWarcraft\Mount\MountList;
use BlizzardApi\Model\WorldOfWarcraft\Pet\PetAbility;
use BlizzardApi\Model\WorldOfWarcraft\Pet\PetList;
use BlizzardApi\Model\WorldOfWarcraft\Pet\PetSpecies;
use BlizzardApi\Model\WorldOfWarcraft\Pet\PetStats;
use BlizzardApi\Model\WorldOfWarcraft\Realm\Realms;
use BlizzardApi\Model\WorldOfWarcraft\Zone\Zone;
use BlizzardApi\Model\WorldOfWarcraft\Zone\ZoneList;
use GuzzleHttp\Psr7\Response;

/**
 * Class WorldOfWarcraftFactory
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class WorldOfWarcraftFactory
{
    const ACHIEVEMENTS        = 'achievements';
    const AUCTION_DATA_STATUS = 'auction_data_status';
    const PET_LIST            = 'pet_list';
    const PET_ABILITY         = 'pet_ability';
    const PET_SPECIES         = 'pet_species';
    const PET_STATS           = 'pet_stats';
    const MOUNT_LIST          = 'mount_stats';
    const REALM_LEADERBOARD   = 'realm_leaderboard';
    const QUEST               = 'quest';
    const RECIPE              = 'recipe';
    const SPELL               = 'spell';
    const BOSS_LIST           = 'boss_list';
    const BOSS                = 'boss';
    const ZONE_LIST           = 'zone_list';
    const ZONE                = 'zone';
    const ITEM                = 'item';
    const ITEM_SET            = 'item_set';
    const REALM_STATUS        = 'realm_status';
    const USER_CHARACTERS     = 'user_characters';

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
            self::ACHIEVEMENTS        => new Achievement(),
            self::AUCTION_DATA_STATUS => new Auction(),
            self::PET_LIST            => new PetList(),
            self::PET_ABILITY         => new PetAbility(),
            self::PET_SPECIES         => new PetSpecies(),
            self::PET_STATS           => new PetStats(),
            self::MOUNT_LIST          => new MountList(),
            self::REALM_LEADERBOARD   => new Leaderboard(),
            self::QUEST               => new Quest(),
            self::RECIPE              => new Recipe(),
            self::SPELL               => new Spell(),
            self::BOSS_LIST           => new BossList(),
            self::BOSS                => new Boss(),
            self::ZONE_LIST           => new ZoneList(),
            self::ZONE                => new Zone(),
            self::ITEM                => new Item(),
            self::ITEM_SET            => new ItemSet(),
            self::REALM_STATUS        => new Realms(),
            self::USER_CHARACTERS     => new UserCharacters(),
        ];

        /** @var AbstractModel $model */
        $model = $models[$modelType];

        return $model->initializeObject($response);
    }
}
