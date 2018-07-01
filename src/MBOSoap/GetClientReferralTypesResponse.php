<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClientReferralTypesResponse
{

    /**
     * @var GetClientReferralTypesResult $GetClientReferralTypesResult
     */
    public $GetClientReferralTypesResult = null;

    /**
     * @param GetClientReferralTypesResult $GetClientReferralTypesResult
     */
    public function __construct($GetClientReferralTypesResult)
    {
      $this->GetClientReferralTypesResult = $GetClientReferralTypesResult;
    }

    /**
     * @return GetClientReferralTypesResult
     */
    public function getGetClientReferralTypesResult()
    {
      return $this->GetClientReferralTypesResult;
    }

    /**
     * @param GetClientReferralTypesResult $GetClientReferralTypesResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClientReferralTypesResponse
     */
    public function setGetClientReferralTypesResult($GetClientReferralTypesResult)
    {
      $this->GetClientReferralTypesResult = $GetClientReferralTypesResult;
      return $this;
    }

}
