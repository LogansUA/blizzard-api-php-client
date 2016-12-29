<?php

namespace BlizzardApi\Tokens;

use BlizzardApi\Tokens\Exceptions\Expired;

/**
 * Class Access Token
 *
 * @author Hristo Mitev <duronrulez@gmail.com>
 * @author Oleg Kachinsky <logansoleg@gmail.com>
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
     * Constructor
     *
     * @param string $accessToken Access token
     * @param string $tokenType   Token type
     * @param int    $expiresIn   Expires in (seconds)
     */
    public function __construct($accessToken, $tokenType, $expiresIn)
    {
        $this->token = $accessToken;
        $this->tokenType = $tokenType;
        $this->expiresIn = $expiresIn;
        $this->createdAt = new \DateTime();
        $this->expiresAt = new \DateTime();
        $this->expiresAt->add(new \DateInterval('PT'.$this->expiresIn.'S'));
    }

    /**
     * Create token from json object
     *
     * @param \stdClass $jsonObject JSON object
     *
     * @return Access
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
        return $this->expiresAt < new \DateTime();
    }

    /**
     * Get the token string
     *
     * @return string
     *
     * @throws Expired
     */
    public function getToken()
    {
        if ($this->isExpired()) {
            throw new Expired('Token has expired');
        }

        return $this->token;
    }
}
