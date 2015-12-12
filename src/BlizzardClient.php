<?php

namespace BlizzardApi;

/**
 * BlizzardClient Client
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
        $this->apiUrl = str_replace('region', strtolower($region), self::API_URL_PATTERN);
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
}
