<?php

namespace BlizzardApi\Service;

use BlizzardApi\BlizzardClient;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Abstract Service
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class Service
{
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
     * @return ResponseInterface
     */
    protected function request($urlSuffix, array $options)
    {
        $client = new Client([
            'base_uri' => $this->blizzardClient->getApiUrl(),
        ]);

        $options = $this->generateRequestOptions($options);

        return $client->get($this->serviceParam.$urlSuffix, $options);
    }

    /**
     * Generate request options
     *
     * Setting default option to given options array if it does have 'query' key,
     * otherwise creating 'query' key with default options
     *
     * @param array $options
     *
     * @return array
     */
    private function generateRequestOptions(array $options = [])
    {
        $result = [
            'query' => [],
            'headers' => [],
        ];

        if (isset($options['query']) || isset($options['headers'])) {
            if (isset($options['query'])) {
                $result['query'] += $options['query'];
            }

            if (isset($options['headers'])) {
                $result['headers'] += $options['headers'];
            }
        } else {
            $result = $options + $this->getDefaultRequestOptions();
        }

        $result['query'] += $this->getQueryDefaultOptions();
        $result['headers'] += $this->getHeadersDefaultOptions();

        return $result;
    }

    private function getDefaultRequestOptions()
    {
        return [
            'query'   => $this->getQueryDefaultOptions(),
            'headers' => $this->getHeadersDefaultOptions(),
        ];
    }

    /**
     * Get default options
     *
     * Get default query options from configured Blizzard Client
     *
     * @return array
     */
    private function getQueryDefaultOptions()
    {
        return [
            'locale' => $this->blizzardClient->getLocale(),
        ];
    }

    /**
     * Get headers default options
     *
     * Get default headers options from configured Blizzard Client
     *
     * @return array
     */
    private function getHeadersDefaultOptions()
    {
        return [
            'authorization' => 'bearer '.$this->blizzardClient->getAccessToken(),
        ];
    }
}
