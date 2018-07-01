<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfContactLogSubtype implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContactLogSubtype[] $ContactLogSubtype
     */
    public $ContactLogSubtype = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactLogSubtype[]
     */
    public function getContactLogSubtype()
    {
      return $this->ContactLogSubtype;
    }

    /**
     * @param ContactLogSubtype[] $ContactLogSubtype
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfContactLogSubtype
     */
    public function setContactLogSubtype(array $ContactLogSubtype = null)
    {
      $this->ContactLogSubtype = $ContactLogSubtype;
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
      return isset($this->ContactLogSubtype[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContactLogSubtype
     */
    public function offsetGet($offset)
    {
      return $this->ContactLogSubtype[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContactLogSubtype $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContactLogSubtype[] = $value;
      } else {
        $this->ContactLogSubtype[$offset] = $value;
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
      unset($this->ContactLogSubtype[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContactLogSubtype Return the current element
     */
    public function current()
    {
      return current($this->ContactLogSubtype);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContactLogSubtype);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContactLogSubtype);
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
      reset($this->ContactLogSubtype);
    }

    /**
     * Countable implementation
     *
     * @return ContactLogSubtype Return count of elements
     */
    public function count()
    {
      return count($this->ContactLogSubtype);
    }

}
