<?php

namespace BlizzardApi\Tokens;

use BlizzardApi\BlizzardClient;
use BlizzardApi\Tokens\Exceptions\Expired;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

/**
 * Class Access Token
 *
 * @author Hristo Mitev <duronrulez@gmail.com>
 */
class Access
{
    /**
     * @var string $token The access token itself
     */
    protected $token;

    /**
     * @var string $tokenType The type of the token
     */
    protected $tokenType;

    /**
     * @var int $expiresIn The time for the token to expire in seconds
     */
    protected $expiresIn;

    /**
     * @var \DateTime $createdAt when was the token created
     */
    protected $createdAt;

    /**
     * @var \DateTime $expiresAt when is the token expiring
     */
    protected $expiresAt;

    /**
     * Access constructor.
     * @param string $accessToken
     * @param string $tokenType
     * @param int $expiresIn
     */
    public function __construct($accessToken, $tokenType, $expiresIn)
    {
        $this->token = $accessToken;
        $this->tokenType = $tokenType;
        $this->expiresIn = $expiresIn;
        $this->createdAt = new \DateTime();
        $this->expiresAt = new \DateTime();;
        $this->expiresAt->add(new \DateInterval('PT'.$this->expiresIn.'S'));
    }

    /**
     * Create token from json object
     * @param \stdClass $jsonObject
     * @return \BlizzardApi\Tokens\Access
     */
    public static function fromJson($jsonObject)
    {
        return new self($jsonObject->access_token, $jsonObject->token_type, $jsonObject->expires_in);
    }

    /**
     * Check if the token is expired
     *
     * @return bool
     */
    public function isExpired()
    {
        if ($this->expiresAt > new \DateTime()){
            return false;
        }

        return true;
    }

    /**
     * Get the token string
     *
     * @return string
     * @throws Expired
     */
    public function getToken()
    {
        if ($this->isExpired()) {
            throw new Expired("Token has expired");
        }

        return $this->token;
    }
}
