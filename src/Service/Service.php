<?php

namespace BlizzardApi\Service;

use BlizzardApi\BlizzardClient;
use BlizzardApi\Model\ServiceFactory;
use BlizzardApi\Model\WorldOfWarcraft\WorldOfWarcraftFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

/**
 * Class Abstract Service
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Service
{
    /**
     * @var string $serviceType Blizzard service type
     */
    protected $serviceType;

    /**
     * @var BlizzardClient $blizzardClient Configured blizzard client
     */
    protected $blizzardClient;

    /**
     * @var string $serviceParam Service parameter
     */
    protected $serviceParam;

    /**
     * Service constructor
     *
     * @param BlizzardClient $blizzardClient Configured blizzard client
     */
    public function __construct(BlizzardClient $blizzardClient)
    {
        $this->blizzardClient = $blizzardClient;
    }

    /**
     * Request
     *
     * Make request with API url and specific URL suffix
     *
     * @param string $urlSuffix API URL method
     * @param array  $options   Options
     *
     * @return Response
     */
    protected function request($urlSuffix, array $options)
    {
        $client = new Client([
            'base_uri' => $this->blizzardClient->getApiUrl(),
        ]);

        $options = $this->generateQueryOptions($options);

        $result = $client->get($this->serviceParam.$urlSuffix, $options);

        return $result;
    }

    /**
     * Create object
     *
     * Create result object from API response
     *
     * @param string   $modelType Model type
     * @param Response $response  API response
     *
     * @return object
     */
    protected function createObject($modelType, $response)
    {
        /** @var WorldOfWarcraftFactory $wowFactory */
        $wowFactory = (new ServiceFactory())->getFactory($this->serviceType);

        return $wowFactory->getModel($modelType, $response);
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
    private function generateQueryOptions(array $options = [])
    {
        if (isset($options['query'])) {
            $result = $options['query'] + $this->getDefaultOptions();
        } else {
            $result['query'] = $options + $this->getDefaultOptions();
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
        return [
            'locale' => $this->blizzardClient->getLocale(),
            'apiKey' => $this->blizzardClient->getApiKey(),
        ];
    }
}
