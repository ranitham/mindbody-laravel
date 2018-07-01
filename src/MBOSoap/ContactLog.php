<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ContactLog extends MBObject
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var Staff $CreatedBy
     */
    public $CreatedBy = null;

    /**
     * @var Client $Client
     */
    public $Client = null;

    /**
     * @var \Carbon\Carbon $CreatedDateTime
     */
    public $CreatedDateTime = null;

    /**
     * @var \Carbon\Carbon $FollowupByDate
     */
    public $FollowupByDate = null;

    /**
     * @var string $ContactName
     */
    public $ContactName = null;

    /**
     * @var string $Text
     */
    public $Text = null;

    /**
     * @var Staff $AssignedTo
     */
    public $AssignedTo = null;

    /**
     * @var string $ContactMethod
     */
    public $ContactMethod = null;

    /**
     * @var boolean $IsSystemGenerated
     */
    public $IsSystemGenerated = null;

    /**
     * @var ArrayOfContactLogComment $Comments
     */
    public $Comments = null;

    /**
     * @var ArrayOfContactLogType $Types
     */
    public $Types = null;

    /**
     * @var ActionCode $Action
     */
    public $Action = null;

    
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
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
      return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client $Client
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setClient($Client)
    {
      $this->Client = $Client;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
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

    /**
     * @return \Carbon\Carbon
     */
    public function getFollowupByDate()
    {
      if ($this->FollowupByDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->FollowupByDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $FollowupByDate
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setFollowupByDate(\Carbon\Carbon $FollowupByDate = null)
    {
      if ($FollowupByDate == null) {
       $this->FollowupByDate = null;
      } else {
        $this->FollowupByDate = $FollowupByDate->format(\Carbon\Carbon::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
      return $this->ContactName;
    }

    /**
     * @param string $ContactName
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setContactName($ContactName)
    {
      $this->ContactName = $ContactName;
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
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return Staff
     */
    public function getAssignedTo()
    {
      return $this->AssignedTo;
    }

    /**
     * @param Staff $AssignedTo
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setAssignedTo($AssignedTo)
    {
      $this->AssignedTo = $AssignedTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactMethod()
    {
      return $this->ContactMethod;
    }

    /**
     * @param string $ContactMethod
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setContactMethod($ContactMethod)
    {
      $this->ContactMethod = $ContactMethod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSystemGenerated()
    {
      return $this->IsSystemGenerated;
    }

    /**
     * @param boolean $IsSystemGenerated
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setIsSystemGenerated($IsSystemGenerated)
    {
      $this->IsSystemGenerated = $IsSystemGenerated;
      return $this;
    }

    /**
     * @return ArrayOfContactLogComment
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param ArrayOfContactLogComment $Comments
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return ArrayOfContactLogType
     */
    public function getTypes()
    {
      return $this->Types;
    }

    /**
     * @param ArrayOfContactLogType $Types
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setTypes($Types)
    {
      $this->Types = $Types;
      return $this;
    }

    /**
     * @return ActionCode
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ActionCode $Action
     * @return \Nlocascio\Mindbody\MBOSoap\ContactLog
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

}
