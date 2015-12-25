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
     * @param string      $apiKey      API key
     * @param null|string $accessToken OAuth access token
     * @param string      $locale      Locale
     * @param string      $region      Region
     */
    public function __construct($apiKey, $accessToken = null, $locale = 'en_us', $region = 'us')
    {
        $this->apiKey      = $apiKey;
        $this->accessToken = $accessToken;
        $this->locale      = strtolower($locale);
        $this->region      = strtolower($region);

        $this->updateApiUrl($region);
    }

    /**
     * Get api url
     *
     * @return string Api url
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * Get api key
     *
     * @return string Api key
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set api key
     *
     * @param string $apiKey Api key
     *
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get access token
     *
     * @return null|string Access token
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set access token
     *
     * @param null|string $accessToken Access token
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string Locale
     */
    public function getLocale()
    {
        return strtolower($this->locale);
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
        $this->locale = strtolower($locale);

        return $this;
    }

    /**
     * Get region
     *
     * @return string Region
     */
    public function getRegion()
    {
        return strtolower($this->region);
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
        $this->region = strtolower($region);

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
