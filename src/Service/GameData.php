<?php

namespace BlizzardApi\Service;

use GuzzleHttp\Psr7\Response;

/**
 * GameData class
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class GameData extends Service
{
    // region Game data API

    /**
     * Get season index
     *
     * Returns base information about available seasons
     *
     * @param array $options Options
     *
     * @return Response
     */
    public function getSeasonIndex(array $options = [])
    {
        $options['access_token'] = $this->blizzardClient->getAccessToken();

        return $this->request('/data/d3/season/', $options);
    }

    /**
     * Get season by ID
     *
     * Returns a leaderboard list for a particular season
     *
     * @param int   $id      The season to lookup
     * @param array $options Options
     *
     * @return Response
     */
    public function getSeasonById($id, array $options = [])
    {
        $options['access_token'] = $this->blizzardClient->getAccessToken();

        return $this->request('/data/d3/season/'.(int) $id, $options);
    }

    /**
     * Get season leaderboard by ID and leaderboard
     *
     * Returns a leaderboard list for a particular season
     *
     * @param int    $id          The season to lookup
     * @param string $leaderboard The leaderboard to lookup, you can find these strings in the Season API call
     * @param array  $options     Options
     *
     * @return Response
     */
    public function getSeasonLeaderboardById($id, $leaderboard, array $options = [])
    {
        $options['access_token'] = $this->blizzardClient->getAccessToken();

        return $this->request('/data/d3/season/'.(int) $id.'/leaderboard/'.(string) $leaderboard, $options);
    }

    /**
     * Get era index
     *
     * Returns base information about available eras
     *
     * @param array $options Options
     *
     * @return Response
     */
    public function getEraIndex(array $options = [])
    {
        $options['access_token'] = $this->blizzardClient->getAccessToken();

        return $this->request('/data/d3/era/', $options);
    }

    /**
     * Get era index by ID
     *
     * Returns a leaderboard list for a particular era
     *
     * @param int   $id      The era to lookup
     * @param array $options Options
     *
     * @return Response
     */
    public function getEraIndexById($id, array $options = [])
    {
        $options['access_token'] = $this->blizzardClient->getAccessToken();

        return $this->request('/data/d3/era/'.(int) $id, $options);
    }

    /**
     * Get era leaderboard by ID and leaderboard
     *
     * Returns a leaderboard
     *
     * @param int    $id          The era to lookup
     * @param string $leaderboard The leaderboard to lookup, you can find these strings in the Era API call
     * @param array  $options     Options
     *
     * @return Response
     */
    public function getEraLeaderboard($id, $leaderboard, array $options = [])
    {
        $options['access_token'] = $this->blizzardClient->getAccessToken();

        return $this->request('/data/d3/era/'.(int) $id.'/leaderboard/'.(string) $leaderboard, $options);
    }

    // endregion Game data API
}
