<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RedeemSpaFinderWellnessCard
{

    /**
     * @var RedeemSpaFinderWellnessCardRequest $Request
     */
    public $Request = null;

    /**
     * @param RedeemSpaFinderWellnessCardRequest $Request
     */
    public function __construct($Request)
    {
      $this->Request = $Request;
    }

    /**
     * @return RedeemSpaFinderWellnessCardRequest
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param RedeemSpaFinderWellnessCardRequest $Request
     * @return \Nlocascio\Mindbody\MBOSoap\RedeemSpaFinderWellnessCard
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

}
