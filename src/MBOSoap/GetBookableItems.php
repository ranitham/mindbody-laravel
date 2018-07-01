<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetBookableItems
{

    /**
     * @var GetBookableItemsRequest $Request
     */
    public $Request = null;

    /**
     * @param GetBookableItemsRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return GetBookableItemsRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param GetBookableItemsRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\GetBookableItems
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
