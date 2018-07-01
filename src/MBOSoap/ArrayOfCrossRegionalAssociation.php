<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfCrossRegionalAssociation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CrossRegionalAssociation[] $CrossRegionalAssociation
     */
    public $CrossRegionalAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CrossRegionalAssociation[]
     */
    public function getCrossRegionalAssociation()
    {
      return $this->CrossRegionalAssociation;
    }

    /**
     * @param CrossRegionalAssociation[] $CrossRegionalAssociation
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfCrossRegionalAssociation
     */
    public function setCrossRegionalAssociation(array $CrossRegionalAssociation = null)
    {
      $this->CrossRegionalAssociation = $CrossRegionalAssociation;
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
      return isset($this->CrossRegionalAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CrossRegionalAssociation
     */
    public function offsetGet($offset)
    {
      return $this->CrossRegionalAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CrossRegionalAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CrossRegionalAssociation[] = $value;
      } else {
        $this->CrossRegionalAssociation[$offset] = $value;
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
      unset($this->CrossRegionalAssociation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CrossRegionalAssociation Return the current element
     */
    public function current()
    {
      return current($this->CrossRegionalAssociation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CrossRegionalAssociation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CrossRegionalAssociation);
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
      reset($this->CrossRegionalAssociation);
    }

    /**
     * Countable implementation
     *
     * @return CrossRegionalAssociation Return count of elements
     */
    public function count()
    {
      return count($this->CrossRegionalAssociation);
    }

}
