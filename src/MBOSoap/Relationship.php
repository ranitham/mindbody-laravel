<?php

namespace Nlocascio\Mindbody\MBOSoap;

class Relationship
{

    /**
     * @var int $ID
     */
    public $ID = null;

    /**
     * @var string $RelationshipName1
     */
    public $RelationshipName1 = null;

    /**
     * @var string $RelationshipName2
     */
    public $RelationshipName2 = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      $this->ID = $ID;
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
     * @return \Nlocascio\Mindbody\MBOSoap\Relationship
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipName1()
    {
      return $this->RelationshipName1;
    }

    /**
     * @param string $RelationshipName1
     * @return \Nlocascio\Mindbody\MBOSoap\Relationship
     */
    public function setRelationshipName1($RelationshipName1)
    {
      $this->RelationshipName1 = $RelationshipName1;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipName2()
    {
      return $this->RelationshipName2;
    }

    /**
     * @param string $RelationshipName2
     * @return \Nlocascio\Mindbody\MBOSoap\Relationship
     */
    public function setRelationshipName2($RelationshipName2)
    {
      $this->RelationshipName2 = $RelationshipName2;
      return $this;
    }

}
