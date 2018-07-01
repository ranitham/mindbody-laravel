<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfStaff implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Staff[] $Staff
     */
    public $Staff = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Staff[]
     */
    public function getStaff()
    {
      return $this->Staff;
    }

    /**
     * @param Staff[] $Staff
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfStaff
     */
    public function setStaff(array $Staff = null)
    {
      $this->Staff = $Staff;
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
      return isset($this->Staff[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Staff
     */
    public function offsetGet($offset)
    {
      return $this->Staff[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Staff $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Staff[] = $value;
      } else {
        $this->Staff[$offset] = $value;
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
      unset($this->Staff[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Staff Return the current element
     */
    public function current()
    {
      return current($this->Staff);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Staff);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Staff);
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
      reset($this->Staff);
    }

    /**
     * Countable implementation
     *
     * @return Staff Return count of elements
     */
    public function count()
    {
      return count($this->Staff);
    }

}
