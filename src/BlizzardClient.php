<?php

namespace BlizzardApi;

use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
     * @var string $accessToken Access token
     */
    private $accessToken;

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
     * @param string      $region      Region
     * @param string      $locale      Locale
     * @param null|string $accessToken OAuth access token
     */
    public function __construct($apiKey, $region = 'us', $locale = 'en_us', $accessToken = null)
    {
        $options = [
            'apiKey'      => $apiKey,
            'region'      => strtolower($region),
            'locale'      => strtolower($locale),
            'accessToken' => $accessToken,
        ];

        $resolver = (new OptionsResolver());
        $this->configureOptions($resolver, $options['region']);

        $options = $resolver->resolve($options);

        $this->apiKey      = $options['apiKey'];
        $this->region      = $options['region'];
        $this->locale      = $options['locale'];
        $this->accessToken = $options['accessToken'];

        $this->updateApiUrl($options['region']);
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

    /**
     * Configure options
     *
     * @param OptionsResolver $resolver Symfony options resolver
     * @param string          $region   Region
     *
     * @throws InvalidOptionsException
     */
    private function configureOptions(OptionsResolver $resolver, $region)
    {
        if (isset(GeoData::$list[$region])) {
            $locales = GeoData::$list[$region];
        } else {
            throw new InvalidOptionsException(
                sprintf(
                    'The option "region" with value "%s" is invalid. Accepted values are: "%s".',
                    $region,
                    implode('", "', array_keys(GeoData::$list))
                )
            );
        }

        $resolver->setRequired(['apiKey', 'region', 'locale', 'accessToken'])
                 ->setAllowedTypes('apiKey', 'string')
                 ->setAllowedTypes('region', 'string')
                 ->setAllowedValues('region', array_keys(GeoData::$list))
                 ->setAllowedTypes('locale', 'string')
                 ->setAllowedValues('locale', $locales)
                 ->setAllowedTypes('accessToken', ['null', 'string']);
    }
}
