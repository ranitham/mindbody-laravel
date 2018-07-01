<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetBookableItemsResponse
{

    /**
     * @var GetBookableItemsResult $GetBookableItemsResult
     */
    public $GetBookableItemsResult = null;

    /**
     * @param GetBookableItemsResult $GetBookableItemsResult
     */
    public function __construct($GetBookableItemsResult)
    {
      $this->GetBookableItemsResult = $GetBookableItemsResult;
    }

    /**
     * @return GetBookableItemsResult
     */
    public function getGetBookableItemsResult()
    {
      return $this->GetBookableItemsResult;
    }

    /**
     * @param GetBookableItemsResult $GetBookableItemsResult
     * @return \Nlocascio\Mindbody\MBOSoap\GetBookableItemsResponse
     */
    public function setGetBookableItemsResult($GetBookableItemsResult)
    {
      $this->GetBookableItemsResult = $GetBookableItemsResult;
      return $this;
    }

}
