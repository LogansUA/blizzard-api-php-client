<?php

namespace BlizzardApi;

/**
 * Class Blizzard Client
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class BlizzardClient
{
    const API_URL_PATTERN = 'https://region.api.battle.net';

    /**
     * @var string $apiUrl Blizzard API url
     */
    private $apiUrl;

    /**
     * @var string $apiKey API key
     */
    private $apiKey;

    /**
     * @var string $locale Locale
     */
    private $locale;

    /**
     * @var string $region Region
     */
    private $region;

    /**
     * BlizzardClient constructor
     *
     * @param string $apiKey API key
     * @param string $locale Locale
     * @param string $region Region
     */
    public function __construct($apiKey, $locale = 'en_US', $region = 'US')
    {
        $this->apiKey = $apiKey;
        $this->locale = $locale;

        $this->updateApiUrl($region);
    }

    /**
     * Get apiUrl
     *
     * @return mixed ApiUrl
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * Get apiKey
     *
     * @return string ApiKey
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey apiKey
     *
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string Locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get region
     *
     * @return string Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;

        $this->updateApiUrl($region);

        return $this;
    }

    /**
     * Update API url
     *
     * Update API url by replacing region in API url pattern
     *
     * @param string $region Region
     *
     * @return $this
     */
    private function updateApiUrl($region)
    {
        $this->apiUrl = str_replace('region', strtolower($region), self::API_URL_PATTERN);
    }
}
