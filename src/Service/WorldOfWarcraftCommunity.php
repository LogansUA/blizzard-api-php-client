<?php

namespace BlizzardApi\Service;

use Psr\Http\Message\ResponseInterface;

/**
 * Class World Of Warcraft Community APIs
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class WorldOfWarcraftCommunity extends Service
{
    /**
     * {@inheritdoc}
     */
    protected $serviceParam = '/wow';

    // region Achievement API

    /**
     * Get achievement information by ID
     *
     * Returns data about an individual achievement.
     *
     * @param int   $achievementId The ID of the achievement to retrieve.
     * @param array $options       Options
     *
     * @return ResponseInterface
     */
    public function getAchievement($achievementId, array $options = [])
    {
        return $this->request('/achievement/'.(int) $achievementId, $options);
    }

    // endregion Achievement API

    // region Auction API

    /**
     * Get auction data status
     *
     * Auction APIs currently provide rolling batches of data about current auctions.
     * Fetching auction dumps is a two-step process that involves checking a per-realm index file to determine
     * if a recent dump has been generated and then fetching the most recently generated dump file (if necessary).
     *
     * This API resource provides a per-realm list of recently generated auction house data dumps.
     *
     * @param string $realm   The realm to request.
     * @param array  $options Options
     *
     * @return ResponseInterface
     */
    public function getAuctionDataStatus($realm, array $options = [])
    {
        return $this->request('/auction/data/'.(string) $realm, $options);
    }

    // endregion Auction API

    // region Boss API

    /**
     * Get boss master list
     *
     * Returns a list of all supported bosses.
     * A "boss" in this context should be considered a boss encounter, which may include more than one NPC.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getBossMasterList(array $options = [])
    {
        return $this->request('/boss/', $options);
    }

    /**
     * Get boss information by ID
     *
     * The boss API provides information about bosses.
     * A "boss" in this context should be considered a boss encounter, which may include more than one NPC.
     *
     * @param int   $bossId  The ID of the boss to retrieve.
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getBoss($bossId, array $options = [])
    {
        return $this->request('/boss/'.(int) $bossId, $options);
    }

    // endregion Boss API

    // region Challenge Mode API

    /**
     * Get realm leaderboards
     *
     * The request returns data for all nine challenge mode maps (currently). The map field includes the current
     * medal times for each dungeon. Each ladder provides data about each character that was part of each run.
     * The character data includes the current cached specialization of the character while the member field includes
     * the specialization of the character during the challenge mode run.
     *
     * @param string $realm   The realm to request.
     * @param array  $options Options
     *
     * @return ResponseInterface
     */
    public function getRealmLeaderboard($realm, array $options = [])
    {
        return $this->request('/challenge/'.(string) $realm, $options);
    }

    /**
     * Get region leaderboards
     *
     * The region leaderboard has the exact same data format as the realm leaderboards except there is no realm field.
     * Instead, the response has the top 100 results gathered for each map for all of the available realm leaderboards in a region.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getRegionLeaderboard(array $options = [])
    {
        return $this->request('/challenge/region', $options);
    }

    // endregion Challenge Mode API

    // region Character profile API

    /**
     * Get character
     *
     * The Character Profile API is the primary way to access character information. This API can be used to fetch a single
     * character at a time through an HTTP GET request to a URL describing the character profile resource.
     * By default, these requests return a basic dataset, and each request can return zero or more additional fields.
     * To access this API, craft a resource URL pointing to the desired character for which to retrieve information.
     *
     * List of possible values in '$fields' variable:
     * - ''             - Returns a basic dataset of character data.
     * - 'achievements' - Returns a list of the battle pets the character has obtained.
     * - 'appearance'   - Data about the character's current battle pet slots.
     *
     *                    The response contains which slot a pet is
     *                    in and whether the slot is empty or locked. The response also includes the battlePetId, which is unique for the
     *                    character and can be used to match a battlePetId in the pets field for the character. The ability list is the
     *                    list of three active abilities on a pet. If the pet is not high enough level for multiple abilities it will always
     *                    be the pet's first three abilities.
     * - 'feed'         - Returns a list of the character's professions. Does not include class professions.
     * - 'guild'        - A summary of the guild to which the character belongs. If the character does not belong to a guild and this field is
     *                    requested, this field will not be exposed.
     *
     *                    When a guild is requested, this resource returns a map with key-value pairs that describe a basic set of guild
     *                    information. Note that the rank of the character is not included in this block as it describes a guild and not
     *                    a membership of the guild. To retrieve the character's rank within the guild, make a specific, separate request to the guild
     *                    profile resource.
     * - 'hunterPets'   - Returns a list of all combat pets the character has obtained.
     * - 'items'        - Returns a list of items equipped by the character. Use of this field will also include the average item level
     *                    and average item level equipped for the character.
     *
     *                    When the items field is used, this resource returns a map structure containing information about the character's
     *                    equipped items as well as their average item level.
     * - 'mounts'       - Returns a list of all mounts the character has obtained.
     * - 'pets'         - Returns a list of the battle pets the character has obtained.
     * - 'petSlots'     - Data about the character's current battle pet slots.
     *
     *                    The response contains which slot a pet is in and whether the slot is empty or locked. The response also includes
     *                    the battlePetId, which is unique for the character and can be used to match a battlePetId in the pets field for
     *                    the character. The ability list is the list of three active abilities on a pet. If the pet is not high enough
     *                    level for multiple abilities it will always be the pet's first three abilities.
     * - 'professions'  - Returns a list of the character's professions. Does not include class professions.
     * - 'progression'  - Returns a list of raids and bosses indicating raid progression and completeness.
     * - 'pvp'          - Returns a map of PvP information, including arena team membership and rated battlegrounds information.
     * - 'quests'       - Returns a list of quests the character has completed.
     * - 'reputation'   - Returns a list of the factions with which the character has an associated reputation.
     * - 'statistics'   - Returns a map of character statistics.
     * - 'stats'        - Returns a map of character attributes and stats.
     * - 'talents'      - Returns a list of the character's talent structures.
     * - 'titles'       - Returns a list of titles the character has obtained, including the currently selected title.
     * - 'audit'        - Raw character audit data that powers the character audit on the game site.
     *
     * @param string $realm         The character's realm. Can be provided as the proper realm name or the normalized realm name
     * @param string $characterName The name of the character you want to retrieve
     * @param string $fields        List of character fields separated by comma (f.e. 'items,mounts,pets,guild')
     * @param array  $options       Options
     *
     * @return ResponseInterface
     */
    public function getCharacter($realm, $characterName, $fields = '', array $options = [])
    {
        $fieldsQueryParam = [
            'fields' => $fields,
        ];

        if (isset($options['query'])) {
            $options['query'] += $fieldsQueryParam;
        } else {
            $options['query'] = $fieldsQueryParam;
        }

        return $this->request('/character/'.(string) $realm.'/'.(string) $characterName, $options);
    }

    // endregion Character profile API

    // region Guild profile API

    /**
     * Get guild profile
     *
     * The guild profile API is the primary way to access guild information. This API can fetch a single guild at a time through
     * an HTTP GET request to a URL describing the guild profile resource. By default, these requests return a basic dataset and
     * each request can retrieve zero or more additional fields.
     *
     * Although this endpoint has no required query string parameters, requests can optionally pass the fields query string parameter
     * to indicate that one or more of the optional datasets is to be retrieved. Those additional fields are listed in the method
     * titled "Optional Fields".
     *
     * List of possible values in '$fields' variable:
     * - ''             - Returns a basic guild data.
     * - 'members'      - A value of members tells the API to include guild's member list in the response.
     * - 'achievements' - A set of data structures that describe the achievements earned by the guild.
     *                    When requesting achievement data, several sets of data will be returned.
     *
     *                    - **achievementsCompleted**         : a list of achievement IDs.
     *                    - **achievementsCompletedTimestamp**: a list of timestamps corresponding to the achievement IDs in the **achievementsCompleted** list. The value of each timestamp indicates when the related achievement was earned by the guild.
     *                    - **criteria**                      : a list of criteria IDs used to determine the partial completeness of guild achievements.
     *                    - **criteriaQuantity**              : a list of values associated with a given achievement criteria. The position of a value corresponds to the position of a given achievement criteria.
     *                    - **criteriaTimestamp**             : a list of timestamps with values that represent when the criteria was considered complete. The position of a value corresponds to the position of a given achievement criteria.
     *                    - **criteriaCreated**               : a list of timestamps for which the value represents the time the criteria was considered started. The position of a value corresponds to the position of a given achievement criteria.
     * - 'news'         - A set of data structures that describe the guild's news feed. When the news feed is requested,
     *                    this resource returns a list of news objects. Each one has a type, a timestamp, and some other data depending
     *                    on the type: itemId, an achievement object, and so on.
     * - 'challenge'    - The top three challenge mode guild run times for each challenge mode map.
     *
     * @param string $realm     The realm the guild lives on
     * @param string $guildName Name of the guild being queried
     * @param string $fields    List of guild fields separated by comma (f.e. 'items,mounts,pets,guild')
     * @param array  $options   Options
     *
     * @return ResponseInterface
     */
    public function getGuildProfile($realm, $guildName, $fields = '', array $options = [])
    {
        $fieldsQueryParam = [
            'fields' => $fields,
        ];

        if (isset($options['query'])) {
            $options['query'] += $fieldsQueryParam;
        } else {
            $options['query'] = $fieldsQueryParam;
        }

        return $this->request('/guild/'.(string) $realm.'/'.(string) $guildName, $options);
    }

    // endregion Guild profile API

    // region Item API

    /**
     * Get item information by ID
     *
     * The item API provides detailed item information, including item set information.
     *
     * @param int   $itemId  The requested item's unique ID.
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getItem($itemId, array $options = [])
    {
        return $this->request('/item/'.(int) $itemId, $options);
    }

    /**
     * Get set information by ID
     *
     * The item API provides detailed item information, including item set information.
     *
     * @param int   $setId   The requested set's unique ID.
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getItemSet($setId, array $options = [])
    {
        return $this->request('/item/set/'.(int) $setId, $options);
    }

    // endregion Item API

    // region Mount API

    /**
     * Get mount master list
     *
     * Returns a list of all supported mounts.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getMountMasterList(array $options = [])
    {
        return $this->request('/mount/', $options);
    }

    // endregion Mount API

    // region Pet API

    /**
     * Get pet master lists
     *
     * Returns a list of all supported battle and vanity pets.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getPetMasterList(array $options = [])
    {
        return $this->request('/pet/', $options);
    }

    /**
     * Get pet ability by ID
     *
     * Returns data about a individual battle pet ability ID. This resource does not provide ability tooltips.
     *
     * @param int   $abilityId The ID of the ability to retrieve.
     * @param array $options   Options
     *
     * @return ResponseInterface
     */
    public function getPetAbility($abilityId, array $options = [])
    {
        return $this->request('/pet/ability/'.(int) $abilityId, $options);
    }

    /**
     * Get pet species by ID
     *
     * Returns data about an individual pet species. Use pets as the field value in a character profile request to get species IDs.
     * Each species also has data about its six abilities.
     *
     * @param int   $speciesId The species for which to retrieve data.
     * @param array $options   Options
     *
     * @return ResponseInterface
     */
    public function getPetSpecies($speciesId, array $options = [])
    {
        return $this->request('/pet/species/'.(int) $speciesId, $options);
    }

    /**
     * Get pet stats by ID
     *
     * Returns detailed information about a given species of pet.
     *
     * @param int   $speciesId The pet's species ID. This can be found by querying a user's list of pets via the Character Profile API.
     * @param int   $level     (optional) The pet's level. Pet levels max out at 25. If omitted, the API assumes a default value of 1.
     * @param int   $breedId   (optional) The pet's breed. Retrievable via the Character Profile API. If omitted the API assumes a default value of 3.
     * @param int   $qualityId (optional) The pet's quality. Retrievable via the Character Profile API. Pet quality can range from 0 to 5
     *                         (0 is poor quality and 5 is legendary). If omitted, the API will assume a default value of 1.
     * @param array $options   Options
     *
     * @return ResponseInterface
     */
    public function getPetStats($speciesId, $level = null, $breedId = null, $qualityId = null, array $options = [])
    {
        $queryParams = [];

        if ($level !== null) {
            $queryParams['level'] = $level;
        }
        if ($breedId !== null) {
            $queryParams['breedId'] = $breedId;
        }
        if ($qualityId !== null) {
            $queryParams['qualityId'] = $qualityId;
        }

        if (isset($options['query'])) {
            $options['query'] += $queryParams;
        } else {
            $options['query'] = $queryParams;
        }

        var_dump($options);

        return $this->request('/pet/stats/'.(int) $speciesId, $options);
    }

    // endregion Pet API

    // region PVP API

    /**
     * Get leaderboards
     *
     * The Leaderboard API endpoint provides leaderboard information for the 2v2, 3v3, 5v5, and Rated Battleground leaderboards.
     *
     * @param int   $bracket The type of leaderboard to retrieve. Valid entries are **2v2**, **3v3**, **5v5**, and **rbg**.
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getLeaderboards($bracket, array $options = [])
    {
        return $this->request('/leaderboard/'.(string) $bracket, $options);
    }

    // endregion PVP API

    // region Quest API

    /**
     * Get quest information by ID
     *
     * Returns metadata for a specified quest.
     *
     * @param int   $questId The ID of the quest to retrieve.
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getQuest($questId, array $options = [])
    {
        return $this->request('/quest/'.(int) $questId, $options);
    }

    // endregion Quest API

    // region Realm status API

    /**
     * Get realm status
     *
     * The realm status API allows developers to retrieve realm status information. This information is limited to whether or not
     * the realm is up, the type and state of the realm, and the current population.
     *
     * Although this endpoint has no required query string parameters, use the optional **realms** parameter to limit the realms
     * returned to a specific set of realms.
     *
     * @param string $realms  List of realms separated by comma (f.e. 'greymane,aegwynn')
     * @param array  $options Options
     *
     * @return ResponseInterface
     */
    public function getRealmStatus($realms = '', array $options = [])
    {
        $queryParams = [
            'realms' => $realms,
        ];

        if (isset($options['query'])) {
            $options['query'] += $queryParams;
        } else {
            $options['query'] = $queryParams;
        }

        return $this->request('/realm/status', $options);
    }

    // endregion Realm status API

    // region Recipe API

    /**
     * Get recipe information by ID
     *
     * Returns basic recipe information.
     *
     * @param int   $recipeId Unique ID for the desired recipe.
     * @param array $options  Options
     *
     * @return ResponseInterface
     */
    public function getRecipe($recipeId, array $options = [])
    {
        return $this->request('/recipe/'.(int) $recipeId, $options);
    }

    // endregion Recipe API

    // region Spell API

    /**
     * Get spell information by ID
     *
     * Returns information about spells.
     *
     * @param int   $spellId The ID of the spell to retrieve.
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getSpell($spellId, array $options = [])
    {
        return $this->request('/spell/'.(int) $spellId, $options);
    }

    // endregion Spell API

    // region Zone API

    /**
     * Get zone master list
     *
     * Returns a list of all supported zones and their bosses. A "zone" in this context should be considered a dungeon or a raid, not
     * a world zone. A "boss" in this context should be considered a boss encounter, which may include more than one NPC.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getZonesMasterList(array $options = [])
    {
        return $this->request('/zone/', $options);
    }

    /**
     * Get zone information by ID
     *
     * Returns information about zones.
     *
     * @param int   $zoneId  The ID of the zone to retrieve.
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getZone($zoneId, array $options = [])
    {
        return $this->request('/zone/'.(int) $zoneId, $options);
    }

    // endregion Zone API

    // region Data resources API

    /**
     * Get data battlegroups
     *
     * Returns a list of battlegroups for the specified region. Note the trailing / on this request path.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataBattlegroups(array $options = [])
    {
        return $this->request('/data/battlegroups/', $options);
    }

    /**
     * Get data character races
     *
     * Returns a list of races and their associated faction, name, unique ID, and skin.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataCharacterRaces(array $options = [])
    {
        return $this->request('/data/character/races', $options);
    }

    /**
     * Get data character classes
     *
     * Returns a list of character classes.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataCharacterClasses(array $options = [])
    {
        return $this->request('/data/character/classes', $options);
    }

    /**
     * Get data character achievements
     *
     * Returns a list of all achievements that characters can earn as well as the category structure and hierarchy.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataCharacterAchievements(array $options = [])
    {
        return $this->request('/data/character/achievements', $options);
    }

    /**
     * Get data guild rewards
     *
     * The guild rewards data API provides a list of all guild rewards.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataGuildRewards(array $options = [])
    {
        return $this->request('/data/guild/rewards', $options);
    }

    /**
     * Get data guild perks
     *
     * Returns a list of all guild perks.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataGuildPerks(array $options = [])
    {
        return $this->request('/data/guild/perks', $options);
    }

    /**
     * Get data guild achievements
     *
     * Returns a list of all guild achievements as well as the category structure and hierarchy.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataGuildAchievements(array $options = [])
    {
        return $this->request('/data/guild/achievements', $options);
    }

    /**
     * Get data item classes
     *
     * Returns a list of item classes.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataItemClasses(array $options = [])
    {
        return $this->request('/data/item/classes', $options);
    }

    /**
     * Get data talents
     *
     * Returns a list of talents, specs, and glyphs for each class.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataTalents(array $options = [])
    {
        return $this->request('/data/talents', $options);
    }

    /**
     * Get data pet types
     *
     * Returns a list of the different battle pet types, including what they are strong and weak against.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getDataPetTypes(array $options = [])
    {
        return $this->request('/data/pet/types', $options);
    }

    // endregion Data resources API
}
