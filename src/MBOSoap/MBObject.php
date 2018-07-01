<?php

namespace Nlocascio\Mindbody\MBOSoap;

class MBObject
{

    /**
     * @var Site $Site
     */
    public $Site = null;

    /**
     * @var ArrayOfString $Messages
     */
    public $Messages = null;

    /**
     * @var string $Execute
     */
    public $Execute = null;

    /**
     * @var string $ErrorCode
     */
    public $ErrorCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Site
     */
    public function getSite()
    {
      return $this->Site;
    }

    /**
     * @param Site $Site
     * @return \Nlocascio\Mindbody\MBOSoap\MBObject
     */
    public function setSite($Site)
    {
      $this->Site = $Site;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getMessages()
    {
      return $this->Messages;
    }

    /**
     * @param ArrayOfString $Messages
     * @return \Nlocascio\Mindbody\MBOSoap\MBObject
     */
    public function setMessages($Messages)
    {
      $this->Messages = $Messages;
      return $this;
    }

    /**
     * @return string
     */
    public function getExecute()
    {
      return $this->Execute;
    }

    /**
     * @param string $Execute
     * @return \Nlocascio\Mindbody\MBOSoap\MBObject
     */
    public function setExecute($Execute)
    {
      $this->Execute = $Execute;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \Nlocascio\Mindbody\MBOSoap\MBObject
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

}
