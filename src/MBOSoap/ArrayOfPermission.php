<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfPermission implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Permission[] $Permission
     */
    public $Permission = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Permission[]
     */
    public function getPermission()
    {
      return $this->Permission;
    }

    /**
     * @param Permission[] $Permission
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfPermission
     */
    public function setPermission(array $Permission = null)
    {
      $this->Permission = $Permission;
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
      return isset($this->Permission[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Permission
     */
    public function offsetGet($offset)
    {
      return $this->Permission[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Permission $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Permission[] = $value;
      } else {
        $this->Permission[$offset] = $value;
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
      unset($this->Permission[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Permission Return the current element
     */
    public function current()
    {
      return current($this->Permission);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Permission);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Permission);
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
      reset($this->Permission);
    }

    /**
     * Countable implementation
     *
     * @return Permission Return count of elements
     */
    public function count()
    {
      return count($this->Permission);
    }

}
