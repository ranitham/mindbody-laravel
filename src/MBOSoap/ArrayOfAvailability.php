<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfAvailability implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Availability[] $Availability
     */
    public $Availability = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Availability[]
     */
    public function getAvailability()
    {
      return $this->Availability;
    }

    /**
     * @param Availability[] $Availability
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfAvailability
     */
    public function setAvailability(array $Availability = null)
    {
      $this->Availability = $Availability;
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
      return isset($this->Availability[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Availability
     */
    public function offsetGet($offset)
    {
      return $this->Availability[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Availability $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Availability[] = $value;
      } else {
        $this->Availability[$offset] = $value;
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
      unset($this->Availability[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Availability Return the current element
     */
    public function current()
    {
      return current($this->Availability);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Availability);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Availability);
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
      reset($this->Availability);
    }

    /**
     * Countable implementation
     *
     * @return Availability Return count of elements
     */
    public function count()
    {
      return count($this->Availability);
    }

}
