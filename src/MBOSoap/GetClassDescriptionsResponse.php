<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassDescriptionsResponse
{

    /**
     * @var GetClassDescriptionsResult $GetClassDescriptionsResult
     */
    public $GetClassDescriptionsResult = null;

    /**
     * @param GetClassDescriptionsResult $GetClassDescriptionsResult
     */
    public function __construct($GetClassDescriptionsResult)
    {
      $this->GetClassDescriptionsResult = $GetClassDescriptionsResult;
    }

    /**
     * @return GetClassDescriptionsResult
     */
    public function getGetClassDescriptionsResult()
    {
      return $this->GetClassDescriptionsResult;
    }

    /**
     * @param GetClassDescriptionsResult $GetClassDescriptionsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassDescriptionsResponse
     */
    public function setGetClassDescriptionsResult($GetClassDescriptionsResult)
    {
      $this->GetClassDescriptionsResult = $GetClassDescriptionsResult;
      return $this;
    }

}
