<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfMobileProvider implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MobileProvider[] $MobileProvider
     */
    public $MobileProvider = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MobileProvider[]
     */
    public function getMobileProvider()
    {
      return $this->MobileProvider;
    }

    /**
     * @param MobileProvider[] $MobileProvider
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfMobileProvider
     */
    public function setMobileProvider(array $MobileProvider = null)
    {
      $this->MobileProvider = $MobileProvider;
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
      return isset($this->MobileProvider[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MobileProvider
     */
    public function offsetGet($offset)
    {
      return $this->MobileProvider[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MobileProvider $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MobileProvider[] = $value;
      } else {
        $this->MobileProvider[$offset] = $value;
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
      unset($this->MobileProvider[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MobileProvider Return the current element
     */
    public function current()
    {
      return current($this->MobileProvider);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MobileProvider);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MobileProvider);
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
      reset($this->MobileProvider);
    }

    /**
     * Countable implementation
     *
     * @return MobileProvider Return count of elements
     */
    public function count()
    {
      return count($this->MobileProvider);
    }

}
