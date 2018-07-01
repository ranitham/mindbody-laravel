<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfUnavailability implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Unavailability[] $Unavailability
     */
    public $Unavailability = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Unavailability[]
     */
    public function getUnavailability()
    {
      return $this->Unavailability;
    }

    /**
     * @param Unavailability[] $Unavailability
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfUnavailability
     */
    public function setUnavailability(array $Unavailability = null)
    {
      $this->Unavailability = $Unavailability;
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
      return isset($this->Unavailability[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Unavailability
     */
    public function offsetGet($offset)
    {
      return $this->Unavailability[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Unavailability $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Unavailability[] = $value;
      } else {
        $this->Unavailability[$offset] = $value;
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
      unset($this->Unavailability[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Unavailability Return the current element
     */
    public function current()
    {
      return current($this->Unavailability);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Unavailability);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Unavailability);
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
      reset($this->Unavailability);
    }

    /**
     * Countable implementation
     *
     * @return Unavailability Return count of elements
     */
    public function count()
    {
      return count($this->Unavailability);
    }

}
