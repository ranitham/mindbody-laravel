<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ContactLogComment extends MBObject
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $Text
     */
    public $Text = null;

    /**
     * @var Staff $CreatedBy
     */
    public $CreatedBy = null;

    /**
     * @var \Carbon\Carbon $CreatedDateTime
     */
    public $CreatedDateTime = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLogComment
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLogComment
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return Staff
     */
    public function getCreatedBy()
    {
      return $this->CreatedBy;
    }

    /**
     * @param Staff $CreatedBy
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLogComment
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getCreatedDateTime()
    {
      if ($this->CreatedDateTime == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->CreatedDateTime);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $CreatedDateTime
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLogComment
     */
    public function setCreatedDateTime(\Carbon\Carbon $CreatedDateTime = null)
    {
      if ($CreatedDateTime == null) {
       $this->CreatedDateTime = null;
      } else {
        $this->CreatedDateTime = $CreatedDateTime->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

}
