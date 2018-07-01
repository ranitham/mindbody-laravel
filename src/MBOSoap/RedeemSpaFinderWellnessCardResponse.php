<?php

namespace Nlocascio\Mindbody\MBOSoap;

class RedeemSpaFinderWellnessCardResponse
{

    /**
     * @var RedeemSpaFinderWellnessCardResult $RedeemSpaFinderWellnessCardResult
     */
    public $RedeemSpaFinderWellnessCardResult = null;

    /**
     * @param RedeemSpaFinderWellnessCardResult $RedeemSpaFinderWellnessCardResult
     */
    public function __construct($RedeemSpaFinderWellnessCardResult)
    {
      $this->RedeemSpaFinderWellnessCardResult = $RedeemSpaFinderWellnessCardResult;
    }

    /**
     * @return RedeemSpaFinderWellnessCardResult
     */
    public function getRedeemSpaFinderWellnessCardResult()
    {
      return $this->RedeemSpaFinderWellnessCardResult;
    }

    /**
     * @param RedeemSpaFinderWellnessCardResult $RedeemSpaFinderWellnessCardResult
     * @return \Nlocascio\Mindbody\MBOSoap\RedeemSpaFinderWellnessCardResponse
     */
    public function setRedeemSpaFinderWellnessCardResult($RedeemSpaFinderWellnessCardResult)
    {
      $this->RedeemSpaFinderWellnessCardResult = $RedeemSpaFinderWellnessCardResult;
      return $this;
    }

}
