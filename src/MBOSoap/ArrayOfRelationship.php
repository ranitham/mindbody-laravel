<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfRelationship implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Relationship[] $Relationship
     */
    public $Relationship = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Relationship[]
     */
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param Relationship[] $Relationship
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfRelationship
     */
    public function setRelationship(array $Relationship = null)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Relationship[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Relationship
     */
    public function offsetGet($offset)
    {
      return $this->Relationship[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Relationship $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Relationship[] = $value;
      } else {
        $this->Relationship[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Relationship[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Relationship Return the current element
     */
    public function current()
    {
      return current($this->Relationship);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Relationship);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Relationship);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Relationship);
    }

    /**
     * Countable implementation
     *
     * @return Relationship Return count of elements
     */
    public function count()
    {
      return count($this->Relationship);
    }

}
