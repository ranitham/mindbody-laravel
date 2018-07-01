<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfStaffFilter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StaffFilter[] $StaffFilter
     */
    public $StaffFilter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StaffFilter[]
     */
    public function getStaffFilter()
    {
      return $this->StaffFilter;
    }

    /**
     * @param StaffFilter[] $StaffFilter
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfStaffFilter
     */
    public function setStaffFilter(array $StaffFilter = null)
    {
      $this->StaffFilter = $StaffFilter;
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
      return isset($this->StaffFilter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StaffFilter
     */
    public function offsetGet($offset)
    {
      return $this->StaffFilter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StaffFilter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->StaffFilter[] = $value;
      } else {
        $this->StaffFilter[$offset] = $value;
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
      unset($this->StaffFilter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StaffFilter Return the current element
     */
    public function current()
    {
      return current($this->StaffFilter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StaffFilter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StaffFilter);
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
      reset($this->StaffFilter);
    }

    /**
     * Countable implementation
     *
     * @return StaffFilter Return count of elements
     */
    public function count()
    {
      return count($this->StaffFilter);
    }

}
