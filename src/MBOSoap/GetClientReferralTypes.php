<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientReferralTypes
{

    /**
     * @var GetClientReferralTypesRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClientReferralTypesRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClientReferralTypesRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClientReferralTypesRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientReferralTypes
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
