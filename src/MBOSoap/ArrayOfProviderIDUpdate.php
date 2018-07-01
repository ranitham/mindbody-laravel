<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfProviderIDUpdate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProviderIDUpdate[] $ProviderIDUpdate
     */
    public $ProviderIDUpdate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProviderIDUpdate[]
     */
    public function getProviderIDUpdate()
    {
      return $this->ProviderIDUpdate;
    }

    /**
     * @param ProviderIDUpdate[] $ProviderIDUpdate
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfProviderIDUpdate
     */
    public function setProviderIDUpdate(array $ProviderIDUpdate = null)
    {
      $this->ProviderIDUpdate = $ProviderIDUpdate;
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
      return isset($this->ProviderIDUpdate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProviderIDUpdate
     */
    public function offsetGet($offset)
    {
      return $this->ProviderIDUpdate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProviderIDUpdate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProviderIDUpdate[] = $value;
      } else {
        $this->ProviderIDUpdate[$offset] = $value;
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
      unset($this->ProviderIDUpdate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProviderIDUpdate Return the current element
     */
    public function current()
    {
      return current($this->ProviderIDUpdate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProviderIDUpdate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProviderIDUpdate);
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
      reset($this->ProviderIDUpdate);
    }

    /**
     * Countable implementation
     *
     * @return ProviderIDUpdate Return count of elements
     */
    public function count()
    {
      return count($this->ProviderIDUpdate);
    }

}
