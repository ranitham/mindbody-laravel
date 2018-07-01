<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetResourceScheduleRequest extends MBRequest
{

    /**
     * @var \Carbon\Carbon $Date
     */
    public $Date = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->Date);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $Date
     * @return \Nlocascio\Mindbody\MBOSoap\GetResourceScheduleRequest
     */
    public function setDate(\Carbon\Carbon $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

}
