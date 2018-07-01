<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetRelationshipsResponse
{

    /**
     * @var GetRelationshipsResult $GetRelationshipsResult
     */
    public $GetRelationshipsResult = null;

    /**
     * @param GetRelationshipsResult $GetRelationshipsResult
     */
    public function __construct($GetRelationshipsResult)
    {
      $this->GetRelationshipsResult = $GetRelationshipsResult;
    }

    /**
     * @return GetRelationshipsResult
     */
    public function getGetRelationshipsResult()
    {
      return $this->GetRelationshipsResult;
    }

    /**
     * @param GetRelationshipsResult $GetRelationshipsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetRelationshipsResponse
     */
    public function setGetRelationshipsResult($GetRelationshipsResult)
    {
      $this->GetRelationshipsResult = $GetRelationshipsResult;
      return $this;
    }

}
