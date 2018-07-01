<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfSemester implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Semester[] $Semester
     */
    public $Semester = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Semester[]
     */
    public function getSemester()
    {
      return $this->Semester;
    }

    /**
     * @param Semester[] $Semester
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfSemester
     */
    public function setSemester(array $Semester = null)
    {
      $this->Semester = $Semester;
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
      return isset($this->Semester[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Semester
     */
    public function offsetGet($offset)
    {
      return $this->Semester[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Semester $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Semester[] = $value;
      } else {
        $this->Semester[$offset] = $value;
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
      unset($this->Semester[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Semester Return the current element
     */
    public function current()
    {
      return current($this->Semester);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Semester);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Semester);
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
      reset($this->Semester);
    }

    /**
     * Countable implementation
     *
     * @return Semester Return count of elements
     */
    public function count()
    {
      return count($this->Semester);
    }

}
