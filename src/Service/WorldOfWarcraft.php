<?php

namespace BlizzardApi\Service;

use GuzzleHttp\Client;

/**
 * Class World Of Warcraft
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class WorldOfWarcraft extends AbstractService
{
    /**
     * {@inheritdoc}
     */
    protected $blizzardClient;

    /**
     * {@inheritdoc}
     */
    protected $serviceParam = '/wow';

    /**
     * Get pet lists
     *
     * Return list of all available pets in World of Warcraft
     *
     * @param array $options Options
     *
     * @return array
     */
    public function getPetList(array $options = [])
    {
        $options = $this->generateQueryOptions($options);

        $result = (new Client())->get($this->blizzardClient->getApiUrl().$this->getServiceParam().'/pet/', $options);

        return $result->getBody();
    }

    /**
     * Get pet ability information by ID
     *
     * Return information about pet ability by given ability ID
     *
     * @param int   $abilityId Pet ability ID
     * @param array $options   Options
     *
     * @return array
     */
    public function getPetAbilityInfo($abilityId = 0, array $options = [])
    {
        $options = $this->generateQueryOptions($options);

        $requestUrl = $this->blizzardClient->getApiUrl().$this->getServiceParam().'/pet/ability/'.$abilityId;

        $result = (new Client())->get($requestUrl, $options);

        return $result->getBody();
    }
}
