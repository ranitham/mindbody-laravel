<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfSessionType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SessionType[] $SessionType
     */
    public $SessionType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SessionType[]
     */
    public function getSessionType()
    {
      return $this->SessionType;
    }

    /**
     * @param SessionType[] $SessionType
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfSessionType
     */
    public function setSessionType(array $SessionType = null)
    {
      $this->SessionType = $SessionType;
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
      return isset($this->SessionType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SessionType
     */
    public function offsetGet($offset)
    {
      return $this->SessionType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SessionType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SessionType[] = $value;
      } else {
        $this->SessionType[$offset] = $value;
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
      unset($this->SessionType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SessionType Return the current element
     */
    public function current()
    {
      return current($this->SessionType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SessionType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SessionType);
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
      reset($this->SessionType);
    }

    /**
     * Countable implementation
     *
     * @return SessionType Return count of elements
     */
    public function count()
    {
      return count($this->SessionType);
    }

}
