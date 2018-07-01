<?php

namespace Nlocascio\Mindbody\MBOSoap;

class UpdateClientVisitsResponse
{

    /**
     * @var UpdateClientVisitsResult $UpdateClientVisitsResult
     */
    public $UpdateClientVisitsResult = null;

    /**
     * @param UpdateClientVisitsResult $UpdateClientVisitsResult
     */
    public function __construct($UpdateClientVisitsResult)
    {
      $this->UpdateClientVisitsResult = $UpdateClientVisitsResult;
    }

    /**
     * @return UpdateClientVisitsResult
     */
    public function getUpdateClientVisitsResult()
    {
      return $this->UpdateClientVisitsResult;
    }

    /**
     * @param UpdateClientVisitsResult $UpdateClientVisitsResult
     * @return \Nlocascio\Mindbody\MBOSoap\UpdateClientVisitsResponse
     */
    public function setUpdateClientVisitsResult($UpdateClientVisitsResult)
    {
      $this->UpdateClientVisitsResult = $UpdateClientVisitsResult;
      return $this;
    }

}
