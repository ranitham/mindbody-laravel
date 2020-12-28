<?php

namespace Nlocascio\Mindbody\MBOSoap;

class TransactionResponse
{

    /**
     * @var int $TransactionID
     */
    public $TransactionID = null;

    /**
     * @var string $AuthenticationUrl
     */
    public $AuthenticationUrl = null;

    /**
     * @param int $TransactionID
     */
    public function __construct($TransactionID)
    {
      $this->TransactionID = $TransactionID;
    }

    /**
     * @return int
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param int $TransactionID
     * @return \Nlocascio\Mindbody\MBOSoap\TransactionResponse
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthenticationUrl()
    {
      return $this->AuthenticationUrl;
    }

    /**
     * @param string $AuthenticationUrl
     * @return \Nlocascio\Mindbody\MBOSoap\TransactionResponse
     */
    public function setAuthenticationUrl($AuthenticationUrl)
    {
      $this->AuthenticationUrl = $AuthenticationUrl;
      return $this;
    }

}
