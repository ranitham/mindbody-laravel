<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfWaitlistEntry implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WaitlistEntry[] $WaitlistEntry
     */
    public $WaitlistEntry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WaitlistEntry[]
     */
    public function getWaitlistEntry()
    {
      return $this->WaitlistEntry;
    }

    /**
     * @param WaitlistEntry[] $WaitlistEntry
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfWaitlistEntry
     */
    public function setWaitlistEntry(array $WaitlistEntry = null)
    {
      $this->WaitlistEntry = $WaitlistEntry;
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
      return isset($this->WaitlistEntry[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WaitlistEntry
     */
    public function offsetGet($offset)
    {
      return $this->WaitlistEntry[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WaitlistEntry $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->WaitlistEntry[] = $value;
      } else {
        $this->WaitlistEntry[$offset] = $value;
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
      unset($this->WaitlistEntry[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WaitlistEntry Return the current element
     */
    public function current()
    {
      return current($this->WaitlistEntry);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WaitlistEntry);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WaitlistEntry);
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
      reset($this->WaitlistEntry);
    }

    /**
     * Countable implementation
     *
     * @return WaitlistEntry Return count of elements
     */
    public function count()
    {
      return count($this->WaitlistEntry);
    }

}
