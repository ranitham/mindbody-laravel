<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfClientService implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClientService[] $ClientService
     */
    public $ClientService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClientService[]
     */
    public function getClientService()
    {
      return $this->ClientService;
    }

    /**
     * @param ClientService[] $ClientService
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfClientService
     */
    public function setClientService(array $ClientService = null)
    {
      $this->ClientService = $ClientService;
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
      return isset($this->ClientService[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClientService
     */
    public function offsetGet($offset)
    {
      return $this->ClientService[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClientService $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClientService[] = $value;
      } else {
        $this->ClientService[$offset] = $value;
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
      unset($this->ClientService[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClientService Return the current element
     */
    public function current()
    {
      return current($this->ClientService);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClientService);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClientService);
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
      reset($this->ClientService);
    }

    /**
     * Countable implementation
     *
     * @return ClientService Return count of elements
     */
    public function count()
    {
      return count($this->ClientService);
    }

}
