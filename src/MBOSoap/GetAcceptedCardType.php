<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetAcceptedCardType
{

    /**
     * @var GetAcceptedCardTypeRequest $Request
     */
    public $Request = null;

    /**
     * @param GetAcceptedCardTypeRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetAcceptedCardTypeRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetAcceptedCardTypeRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetAcceptedCardType
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
