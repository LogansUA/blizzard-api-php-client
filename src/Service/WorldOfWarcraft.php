<?php

namespace BlizzardApi\Service;

use Psr\Http\Message\ResponseInterface;

/**
 * Class World Of Warcraft
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class WorldOfWarcraft extends Service
{
    /**
     * {@inheritdoc}
     */
    protected $serviceParam = '/wow';

    // region Achievement API

    /**
     * Get achievement information by ID
     *
     * This provides data about an individual achievement
     *
     * @param int   $achievementId The ID of the achievement to retrieve
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
     * Auction APIs currently provide rolling batches of data about current auctions. Fetching auction dumps is a two
     * step process that involves checking a per-realm index file to determine if a recent dump has been generated and
     * then fetching the most recently generated dump file if necessary.
     *
     * This API resource provides a per-realm list of recently generated auction house data dumps
     *
     * @param string $realm   The realm being requested
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
     * A list of all supported bosses. A 'boss' in this context should be considered a boss encounter, which may include
     * more than one NPC.
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
     * The boss API provides information about bosses. A 'boss' in this context should be considered a boss encounter,
     * which may include more than one NPC.
     *
     * @param int   $bossId  The ID of the boss you want to retrieve
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
     * The data in this request has data for all 9 challenge mode maps (currently). The map field includes the current
     * medal times for each dungeon. Inside each ladder we provide data about each character that was part of each run.
     * The character data includes the current cached spec of the character while the member field includes the spec of
     * the character during the challenge mode run.
     *
     * @param string $realm   The realm being requested
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
     * It is simply the top 100 results gathered for each map for all of the available realm leaderboards in a region.
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getRegionLeaderboard(array $options = [])
    {
        return $this->request('/challenge/region/', $options);
    }

    // endregion Challenge Mode API

    // region Character profile API

    /**
     * Get character
     *
     * The Character Profile API is the primary way to access character information. This Character Profile API can be
     * used to fetch a single character at a time through an HTTP GET request to a URL describing the character profile
     * resource. By default, a basic dataset will be returned and with each request and zero or more additional fields
     * can be retrieved. To access this API, craft a resource URL pointing to the character who's information is to be
     * retrieved
     *
     * @param string $realm         The character's realm. Can be provided as the proper realm name or the normalized realm name
     * @param string $characterName The name of the character you want to retrieve
     * @param array  $options       Options
     *
     * @return ResponseInterface
     */
    public function getCharacter($realm, $characterName, array $options = [])
    {
        return $this->request('/character/'.(string) $realm.'/'.(string) $characterName, $options);
    }

    // endregion Character profile API

    // region Guild profile API

    /**
     * Get guild profile
     *
     * The guild profile API is the primary way to access guild information. This guild profile API can be used to fetch
     * a single guild at a time through an HTTP GET request to a url describing the guild profile resource. By default,
     * a basic dataset will be returned and with each request and zero or more additional fields can be retrieved.
     *
     * There are no required query string parameters when accessing this resource, although the fields query string
     * parameter can optionally be passed to indicate that one or more of the optional datasets is to be retrieved.
     * Those additional fields are listed in the method titled "Optional Fields".
     *
     * @param string $realm     The realm the guild lives on
     * @param string $guildName Name of the guild being queried
     * @param array  $options   Options
     *
     * @return ResponseInterface
     */
    public function getGuild($realm, $guildName, array $options = [])
    {
        return $this->request('/guild/'.(string) $realm.'/'.(string) $guildName, $options);
    }

    // endregion Guild profile API

    // region Item API

    /**
     * Get item information by ID
     *
     * The item API provides detailed item information. This includes item set information if this item is part of a set.
     *
     * @param int   $itemId  Unique ID of the item being requested
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
     * The item API provides detailed item information. This includes item set information if this item is part of a set.
     *
     * @param int   $setId   Unique ID of the set being requested
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
     * A list of all supported mounts
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
     * Get pet lists
     *
     * A list of all supported battle and vanity pets
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getPetList(array $options = [])
    {
        return $this->request('/pet/', $options);
    }

    /**
     * Get pet ability information by ID
     *
     * This provides data about a individual battle pet ability ID. We do not provide the tooltip for the ability yet.
     * We are working on a better way to provide this since it depends on your pet's species, level and quality rolls.
     *
     * @param int   $abilityId The ID of the ability you want to retrieve
     * @param array $options   Options
     *
     * @return ResponseInterface
     */
    public function getPetAbility($abilityId, array $options = [])
    {
        return $this->request('/pet/ability/'.(int) $abilityId, $options);
    }

    /**
     * Get pet species information by ID
     *
     * This provides the data about an individual pet species. The species IDs can be found your character profile
     * using the options pets field. Each species also has data about what it's 6 abilities are.
     *
     * @param int   $speciesId The species you want to retrieve data on
     * @param array $options   Options
     *
     * @return ResponseInterface
     */
    public function getPetSpecies($speciesId, array $options = [])
    {
        return $this->request('/pet/species/'.(int) $speciesId, $options);
    }

    /**
     * Get pet stats by species ID
     *
     * Retrieve detailed information about a given species of pet
     *
     * @param int   $speciesId The pet's species ID. This can be found by querying a users' list of pets via the Character Profile API
     * @param array $options   Options
     *
     * @return ResponseInterface
     */
    public function getPetStats($speciesId, array $options = [])
    {
        return $this->request('/pet/stats/'.(int) $speciesId, $options);
    }

    // endregion Pet API

    // region PVP API

    /**
     * Get leaderboards
     *
     * The Leaderboard API endpoint provides leaderboard information for the 2v2, 3v3, 5v5 and Rated Battleground
     * leaderboards.
     *
     * @param int   $bracket The type of leaderboard you want to retrieve. Valid entries are 2v2, 3v3, 5v5, and rbg
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
     * Retrieve metadata for a given quest.
     *
     * @param int   $questId The ID of the desired quest
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
     * The realm status API allows developers to retrieve realm status information. This information is limited to
     * whether or not the realm is up, the type and state of the realm, the current population, and the status of the
     * two world PvP zones
     *
     * @param array $options Options
     *
     * @return ResponseInterface
     */
    public function getRealmStatus(array $options = [])
    {
        return $this->request('/realm/', $options);
    }

    // endregion Realm status API

    // region Recipe API

    /**
     * Get recipe information by ID
     *
     * The recipe API provides basic recipe information
     *
     * @param int   $recipeId Unique ID for the desired recipe
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
     * The spell API provides some information about spells
     *
     * @param int   $spellId Unique ID of the desired spell
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
     * A list of all supported zones and their bosses. A 'zone' in this context should be considered a dungeon, or a
     * raid, not a zone as in a world zone. A 'boss' in this context should be considered a boss encounter, which may
     * include more than one NPC.
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
     * The Zone API provides some information about zones.
     *
     * @param int   $zoneId  The ID of the zone you want to retrieve
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
     * The battlegroups data API provides the list of battlegroups for this region. Please note the trailing '/' on this URL
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
     * The character races data API provides a list of each race and their associated faction, name, unique ID, and skin
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
     * The character classes data API provides a list of character classes
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
     * The character achievements data API provides a list of all of the achievements that characters can earn as well
     * as the category structure and hierarchy
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
     * The guild rewards data API provides a list of all guild rewards
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
     * The guild perks data API provides a list of all guild perks
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
     * The guild achievements data API provides a list of all of the achievements that guilds can earn as well as the
     * category structure and hierarchy
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
     * The item classes data API provides a list of item classes
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
     * The talents data API provides a list of talents, specs and glyphs for each class
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
     * The different bat pet types (including what they are strong and weak against)
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

    // region Community OAuth API

    /**
     * Get profile characters
     *
     * This provides data about the current logged in OAuth user's WoW profile
     *
     * @param null|string $accessToken Authorized user access token
     * @param array       $options     Options
     *
     * @return ResponseInterface
     */
    public function getProfileCharacters($accessToken = null, array $options = [])
    {
        if (null === $accessToken) {
            $options['access_token'] = $this->blizzardClient->getAccessToken();
        } else {
            $options['access_token'] = $accessToken;
        }

        return $this->request('/user/characters', $options);
    }

    // endregion Community OAuth API
}
