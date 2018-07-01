<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetClassDescriptions
{

    /**
     * @var GetClassDescriptionsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetClassDescriptionsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetClassDescriptionsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetClassDescriptionsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetClassDescriptions
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
