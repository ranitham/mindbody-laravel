<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfContactLog implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContactLog[] $ContactLog
     */
    public $ContactLog = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactLog[]
     */
    public function getContactLog()
    {
      return $this->ContactLog;
    }

    /**
     * @param ContactLog[] $ContactLog
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfContactLog
     */
    public function setContactLog(array $ContactLog = null)
    {
      $this->ContactLog = $ContactLog;
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
      return isset($this->ContactLog[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContactLog
     */
    public function offsetGet($offset)
    {
      return $this->ContactLog[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContactLog $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContactLog[] = $value;
      } else {
        $this->ContactLog[$offset] = $value;
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
      unset($this->ContactLog[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContactLog Return the current element
     */
    public function current()
    {
      return current($this->ContactLog);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContactLog);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContactLog);
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
      reset($this->ContactLog);
    }

    /**
     * Countable implementation
     *
     * @return ContactLog Return count of elements
     */
    public function count()
    {
      return count($this->ContactLog);
    }

}
