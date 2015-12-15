<?php

namespace BlizzardApi\Service;

use BlizzardApi\BlizzardClient;

/**
 * Class Abstract Service
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
abstract class AbstractService
{
    /**
     * @var BlizzardClient $blizzardClient Configured blizzard client
     */
    protected $blizzardClient;

    /**
     * @var array $defaultOption Array of default options
     */
    protected $defaultOption = [];

    /**
     * @var string $serviceParam Service parameter
     */
    protected $serviceParam;

    /**
     * WorldOfWarcraft constructor
     *
     * @param BlizzardClient $blizzardClient Configured blizzard client
     */
    public function __construct(BlizzardClient $blizzardClient)
    {
        $this->blizzardClient = $blizzardClient;
    }

    /**
     * Generate query options
     *
     * Setting default option to given options array if it does have 'query' key,
     * otherwise creating 'query' key with default options
     *
     * @param array $options
     *
     * @return array
     */
    protected function generateQueryOptions(array $options = [])
    {
        $result = [];

        $defaultOption = $this->getDefaultOptions();

        if (isset($options)) {
            $result['query'] = $options + $defaultOption;
        } else {
            $result['query'] = $defaultOption;
        }

        return $result;
    }

    /**
     * Get default options
     *
     * Get default query options from configured Blizzard Client
     *
     * @return array
     */
    private function getDefaultOptions()
    {
        $defaultOption = [
            'locale' => $this->blizzardClient->getLocale(),
            'apiKey' => $this->blizzardClient->getApiKey(),
        ];

        return $defaultOption;
    }
}
