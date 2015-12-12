<?php

namespace BlizzardApi\Service;

use BlizzardApi\BlizzardClient;
use GuzzleHttp\Client;
use Psr\Http\Message\StreamInterface;

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
    protected $serviceParam = '/wow';

    /**
     * Get pet lists
     *
     * Return list of all available pets in World of Warcraft
     *
     * @param BlizzardClient $blizzardClient Configured blizzard client
     * @param array          $options        Options
     *
     * @return StreamInterface
     */
    public function getPetList(BlizzardClient $blizzardClient, array $options = [])
    {
        $defaultOption = [
            'locale' => $blizzardClient->getLocale(),
            'apiKey' => $blizzardClient->getApiKey(),
        ];

        if (isset($options['query'])) {
            array_merge($options['query'], $defaultOption);
        } else {
            $options['query'] = $defaultOption;
        }

        $result = (new Client())->get($blizzardClient->getApiUrl().$this->getServiceParam().'/pet/', $options);

        return $result->getBody();
    }
}
