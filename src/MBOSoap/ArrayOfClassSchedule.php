<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfClassSchedule implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClassSchedule[] $ClassSchedule
     */
    public $ClassSchedule = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClassSchedule[]
     */
    public function getClassSchedule()
    {
      return $this->ClassSchedule;
    }

    /**
     * @param ClassSchedule[] $ClassSchedule
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfClassSchedule
     */
    public function setClassSchedule(array $ClassSchedule = null)
    {
      $this->ClassSchedule = $ClassSchedule;
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
      return isset($this->ClassSchedule[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClassSchedule
     */
    public function offsetGet($offset)
    {
      return $this->ClassSchedule[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClassSchedule $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClassSchedule[] = $value;
      } else {
        $this->ClassSchedule[$offset] = $value;
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
      unset($this->ClassSchedule[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClassSchedule Return the current element
     */
    public function current()
    {
      return current($this->ClassSchedule);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClassSchedule);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClassSchedule);
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
      reset($this->ClassSchedule);
    }

    /**
     * Countable implementation
     *
     * @return ClassSchedule Return count of elements
     */
    public function count()
    {
      return count($this->ClassSchedule);
    }

}
