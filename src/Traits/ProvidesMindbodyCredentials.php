<?php

namespace Nlocascio\Mindbody\Traits;

use Nlocascio\Mindbody\MBOSoap\SourceCredentials;
use Nlocascio\Mindbody\MBOSoap\UserCredentials;

trait ProvidesMindbodyCredentials
{
    /**
     * Provide Request Credentials
     *
     * @return mixed
     */
    protected function getCredentials()
    {
        $credentials['SourceCredentials'] = $this->getSourceCredentials();

        if ($this->getUserCredentials()) {
            $credentials['UserCredentials'] = $this->getUserCredentials();
        }

        return $credentials;
    }

    /**
     * @return SourceCredentials
     */
    protected function getSourceCredentials()
    {
        $creds = new SourceCredentials();
        $creds->setSourceName($this->settings[$this->connection]['source_credentials']['username'])
            ->setPassword($this->settings[$this->connection]['source_credentials']['password'])
            ->setSiteIDs($this->settings[$this->connection]['site_ids']);

        return $creds;
    }

    /**
     * @return UserCredentials
     */
    protected function getUserCredentials()
    {
        $creds = new UserCredentials();
        $creds->setUsername($this->settings[$this->connection]['user_credentials']['username'])
            ->setPassword($this->settings[$this->connection]['user_credentials']['password'])
            ->setSiteIDs($this->settings[$this->connection]['site_ids']);

        return $creds;
    }
}