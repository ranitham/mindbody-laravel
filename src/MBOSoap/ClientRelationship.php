<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ClientRelationship extends MBObject
{

    /**
     * @var Client $RelatedClient
     */
    public $RelatedClient = null;

    /**
     * @var Relationship $Relationship
     */
    public $Relationship = null;

    /**
     * @var string $RelationshipName
     */
    public $RelationshipName = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Client
     */
    public function getRelatedClient()
    {
      return $this->RelatedClient;
    }

    /**
     * @param Client $RelatedClient
     * @return \Nlocascio\Mindbody\MBOSoap\ClientRelationship
     */
    public function setRelatedClient($RelatedClient)
    {
      $this->RelatedClient = $RelatedClient;
      return $this;
    }

    /**
     * @return Relationship
     */
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param Relationship $Relationship
     * @return \Nlocascio\Mindbody\MBOSoap\ClientRelationship
     */
    public function setRelationship($Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipName()
    {
      return $this->RelationshipName;
    }

    /**
     * @param string $RelationshipName
     * @return \Nlocascio\Mindbody\MBOSoap\ClientRelationship
     */
    public function setRelationshipName($RelationshipName)
    {
      $this->RelationshipName = $RelationshipName;
      return $this;
    }

}
