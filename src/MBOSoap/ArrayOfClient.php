<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfClient implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Client[] $Client
     */
    public $Client = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Client[]
     */
    public function getClient()
    {
      return $this->Client;
    }

    /**
     * @param Client[] $Client
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfClient
     */
    public function setClient(array $Client = null)
    {
      $this->Client = $Client;
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
      return isset($this->Client[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Client
     */
    public function offsetGet($offset)
    {
      return $this->Client[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Client $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Client[] = $value;
      } else {
        $this->Client[$offset] = $value;
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
      unset($this->Client[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Client Return the current element
     */
    public function current()
    {
      return current($this->Client);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Client);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Client);
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
      reset($this->Client);
    }

    /**
     * Countable implementation
     *
     * @return Client Return count of elements
     */
    public function count()
    {
      return count($this->Client);
    }

}
