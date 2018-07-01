<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfSite implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Site[] $Site
     */
    public $Site = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Site[]
     */
    public function getSite()
    {
      return $this->Site;
    }

    /**
     * @param Site[] $Site
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfSite
     */
    public function setSite(array $Site = null)
    {
      $this->Site = $Site;
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
      return isset($this->Site[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Site
     */
    public function offsetGet($offset)
    {
      return $this->Site[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Site $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Site[] = $value;
      } else {
        $this->Site[$offset] = $value;
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
      unset($this->Site[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Site Return the current element
     */
    public function current()
    {
      return current($this->Site);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Site);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Site);
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
      reset($this->Site);
    }

    /**
     * Countable implementation
     *
     * @return Site Return count of elements
     */
    public function count()
    {
      return count($this->Site);
    }

}
