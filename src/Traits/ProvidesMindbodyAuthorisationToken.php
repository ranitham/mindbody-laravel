<?php

namespace Nlocascio\Mindbody\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Nlocascio\Mindbody\Api\UserTokenApi;
use Nlocascio\Mindbody\Model\IssueRequest;

trait ProvidesMindbodyAuthorisationToken
{
    /**
     * Get a user token for use in the API
     *
     * @param \Nlocascio\Mindbody\Api\UserTokenApi $tokenApi
     * @param string $username
     * @param string $password
     *
     * @return string
     */
    protected function getAuthorisationToken(UserTokenApi $tokenApi, string $username, string $password): string
    {
        // The token expires in 7 days if unused. Update the cache with a new token or refresh the lifetime of this one
        $token = Cache::pull('MBO_Auth_Token_Key');
        if (null === $token) {
            $issueRquest = new IssueRequest();
            $issueRquest->setUsername($username);
            $issueRquest->setPassword($password);
            $tokenResponse = $tokenApi->userTokenIssue($issueRquest);
            $token = $tokenResponse->getAccessToken();
        }
        Cache::put('MBO_Auth_Token_Key', $token, Carbon::now()->addDays(6));

        return $token;
    }

    /**
     * Update the Access Token (if needed)
     *
     * @param string|null $username
     * @param string|null $password
     *
     * @return self
     */
    protected function updateAccessToken(string $username = null, string $password = null): self
    {
        /** @var UserTokenApi */
        $tokenApi = $this->getMindbodyEndpointInstance('userToken');
        $username = $username ?? \config('mindbody.source_credentials.username');
        $password = $password ?? \config('mindbody.source_credentials.password');
        $this->apiConfiguration->setApiKey('authorization', $this->getAuthorisationToken($tokenApi, $username, $password));

        return $this;
    }
}
