<?php

namespace BlizzardApi;

use GuzzleHttp\Client;
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
    const API_ACCESS_TOKEN_URL_PATTERN = 'https://region.battle.net/oauth/token';

    /**
     * @var string $apiUrl Blizzard API url
     */
    private $apiUrl;

    /**
     * @var string $apiAccessTokenUrl Blizzard API Access Token url
     */
    private $apiAccessTokenUrl;

    /**
     * @var string $apiKey API key
     */
    private $apiKey;

    /**
     * @var \BlizzardApi\Tokens\Access[] $accessTokens Access tokens
     */
    private $accessTokens;

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
     * @param string      $apiSecret   API Secret key
     * @param string      $region      Region
     * @param string      $locale      Locale
     */
    public function __construct($apiKey, $apiSecret, $region = 'us', $locale = 'en_us')
    {
        $options = [
            'apiKey'      => $apiKey,
            'apiSecret'   => $apiSecret,
            'region'      => strtolower($region),
            'locale'      => strtolower($locale)
        ];

        $resolver = (new OptionsResolver());
        $this->configureOptions($resolver, $options['region']);

        $options = $resolver->resolve($options);

        $this->apiKey      = $options['apiKey'];
        $this->apiSecret   = $options['apiSecret'];
        $this->region      = $options['region'];
        $this->locale      = $options['locale'];

        $this->updateApiUrl($options['region']);
        $this->updateApiAccessTokenUrl($options['region']);
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
     * Get api Access Token url
     *
     * @return string Api Access Token url
     */
    public function getApiAccessTokenUrl()
    {
        return $this->apiAccessTokenUrl;
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
     * Get api secret
     *
     * @return string Api secret
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * Set api secret
     *
     * @param string $apiSecret Api secret
     *
     * @return $this
     */
    public function setApiSecret($apiSecret)
    {
        $this->apiSecret = $apiSecret;

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
        $this->updateApiAccessTokenUrl($region);

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
        if ($this->accessTokens == null) {
            $this->accessTokens = [];
        }

        if (!array_key_exists($this->getRegion(), $this->accessTokens)) {
            $this->accessTokens[$this->getRegion()] = $this->requestAccessToken();
        }

        return $this->accessTokens[$this->getRegion()]->getToken();
    }

    /**
     * Set access token
     *
     * @param null|Tokens\Access $accessToken Access token
     *
     * @return $this
     */
    public function setAccessToken(Tokens\Access $accessToken)
    {
        $this->accessTokens[$this->getRegion()] = $accessToken;

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
     * Update API Access Token url
     *
     * Update API Access Token url by replacing region in API url pattern
     *
     * @param string $region Region
     *
     * @return $this
     */
    private function updateApiAccessTokenUrl($region)
    {
        $this->apiAccessTokenUrl = str_replace('region', strtolower($region), self::API_ACCESS_TOKEN_URL_PATTERN);
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

        $resolver->setRequired(['apiKey', 'apiSecret', 'region', 'locale'])
                 ->setAllowedTypes('apiKey', 'string')
                 ->setAllowedTypes('apiSecret', 'string')
                 ->setAllowedTypes('region', 'string')
                 ->setAllowedValues('region', array_keys(GeoData::$list))
                 ->setAllowedTypes('locale', 'string')
                 ->setAllowedValues('locale', $locales);
    }

    protected function requestAccessToken() {
        $client = new Client();

        $options = [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->getApiKey(),
                'client_secret' => $this->getApiSecret(),
            ]
        ];

        $result = $client->post($this->getApiAccessTokenUrl(), $options);

        if ($result->getStatusCode() == 200) {
            return Tokens\Access::fromJson(json_decode($result->getBody()->getContents()));
        } else {
            throw new \HttpResponseException("Invalid Response");
        }
    }

}
