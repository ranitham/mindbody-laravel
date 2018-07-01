<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfDateTime implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var \Carbon\Carbon[] $dateTime
     */
    public $dateTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \Carbon\Carbon[]
     */
    public function getDateTime()
    {
      return $this->dateTime;
    }

    /**
     * @param \Carbon\Carbon[] $dateTime
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfDateTime
     */
    public function setDateTime(array $dateTime = null)
    {
      $this->dateTime = $dateTime;
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
      return isset($this->dateTime[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return \Carbon\Carbon
     */
    public function offsetGet($offset)
    {
      return $this->dateTime[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param \Carbon\Carbon $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->dateTime[] = $value;
      } else {
        $this->dateTime[$offset] = $value;
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
      unset($this->dateTime[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return \Carbon\Carbon Return the current element
     */
    public function current()
    {
      return current($this->dateTime);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->dateTime);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->dateTime);
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
      reset($this->dateTime);
    }

    /**
     * Countable implementation
     *
     * @return \Carbon\Carbon Return count of elements
     */
    public function count()
    {
      return count($this->dateTime);
    }

}
