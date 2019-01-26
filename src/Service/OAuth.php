<?php

namespace BlizzardApi\Service;

use BlizzardApi\Tokens\Access;
use GuzzleHttp\Client;

class OAuth extends Service
{
    /**
     * Request access token
     *
     * The access token request is the second part of the authorization code flow.
     * When the first part completes, the user's browser is redirected to an application's redirect_uri.
     * This redirect URI also includes an access code and (optionally) a state parameter.
     * This request allows the application to exchange the access code for an access token to can use in subsequent API requests.
     *
     * @param string $grantType Grant type
     *
     * @return \BlizzardApi\Tokens\Access
     *
     * @throws \HttpResponseException
     */
    public function requestAccessToken($grantType = 'client_credentials')
    {
        $options = [
            'auth'        => [$this->blizzardClient->getClientId(), $this->blizzardClient->getClientSecret()],
            'form_params' => [
                'grant_type' => $grantType,
            ],
        ];

        $result = (new Client())->post($this->blizzardClient->getApiAccessTokenUrl(), $options);

        if (200 === $result->getStatusCode()) {
            return Access::fromJson(json_decode($result->getBody()->getContents()));
        } else {
            throw new \HttpResponseException('Invalid Response');
        }
    }
}
