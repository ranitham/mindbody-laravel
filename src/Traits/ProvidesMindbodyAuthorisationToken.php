<?php

namespace Nlocascio\Mindbody\Traits;

use Carbon\CarbonInterval;
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
        return Cache::remember('MBO_Auth_Token_Key', CarbonInterval::hours(23), function () use ($tokenApi, $username, $password) {
            $issueRequest = new IssueRequest();
            $issueRequest->setUsername($username);
            $issueRequest->setPassword($password);
            $tokenResponse = $tokenApi->userTokenIssueToken($issueRequest);
            return $tokenResponse->getAccessToken();
        });
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

    /**
     * Forget the token
     *
     * @return boolean
     */
    protected function forgetAccessToken(): bool
    {
        return Cache::forget('MBO_Auth_Token_Key');
    }
}
