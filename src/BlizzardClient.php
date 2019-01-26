<?php

namespace BlizzardApi;

use BlizzardApi\Service\OAuth;
use BlizzardApi\Tokens\Access;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class Blizzard Client
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 * @author Hristo Mitev <duronrulez@gmail.com>
 */
class BlizzardClient
{
    const API_URL_PATTERN              = 'https://region.api.blizzard.com';
    const CHINA_API_URL                = 'https://gateway.battlenet.com.cn';
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
     * @var string $clientId Client ID
     */
    private $clientId;

    /**
     * @var string $clientSecret Client Secret
     */
    private $clientSecret;

    /**
     * @var Access[] $accessTokens Access tokens
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
     * Constructor
     *
     * @param string $clientId     Access token
     * @param string $clientSecret API Secret key
     * @param string $region       Region
     * @param string $locale       Locale
     */
    public function __construct($clientId, $clientSecret, $region = 'us', $locale = 'en_us')
    {
        $options = [
            'clientId'     => $clientId,
            'clientSecret' => $clientSecret,
            'region'       => strtolower($region),
            'locale'       => strtolower($locale),
        ];

        $resolver = new OptionsResolver();
        $this->configureOptions($resolver, $options['region']);

        $options = $resolver->resolve($options);

        $this->clientId = $options['clientId'];
        $this->clientSecret = $options['clientSecret'];
        $this->region = $options['region'];
        $this->locale = $options['locale'];

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
     * Get client ID
     *
     * @return string Client ID
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set client ID
     *
     * @param string $clientId Client ID
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get client secret
     *
     * @return string Client secret
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Set client secret
     *
     * @param string $clientSecret Client secret
     *
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;

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
        $this->locale = strtolower($locale);

        return $this;
    }

    /**
     * Get access token
     *
     * @return null|string Access token
     *
     * @throws \BlizzardApi\Tokens\Exceptions\Expired
     * @throws \HttpResponseException
     */
    public function getAccessToken()
    {
        if (null === $this->accessTokens) {
            $this->accessTokens = [];
        }

        if (!array_key_exists($this->getRegion(), $this->accessTokens)) {
            $oauth = new OAuth($this);

            $this->accessTokens[$this->getRegion()] = $oauth->requestAccessToken();
        }

        return $this->accessTokens[$this->getRegion()]->getToken();
    }

    /**
     * Set access token
     *
     * @param null|Access $accessToken Access token
     *
     * @return $this
     */
    public function setAccessToken(Access $accessToken)
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
        if ($region === 'cn') {
            $this->apiUrl = self::CHINA_API_URL;
        } else {
            $this->apiUrl = str_replace('region', strtolower($region), self::API_URL_PATTERN);
        }

        return $this;
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

        return $this;
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

        $resolver->setRequired(['clientId', 'clientSecret', 'region', 'locale'])
            ->setAllowedTypes('clientId', 'string')
            ->setAllowedTypes('clientSecret', 'string')
            ->setAllowedTypes('region', 'string')
            ->setAllowedValues('region', array_keys(GeoData::$list))
            ->setAllowedTypes('locale', 'string')
            ->setAllowedValues('locale', $locales);
    }
}
