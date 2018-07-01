<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfProspectStage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProspectStage[] $ProspectStage
     */
    public $ProspectStage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProspectStage[]
     */
    public function getProspectStage()
    {
      return $this->ProspectStage;
    }

    /**
     * @param ProspectStage[] $ProspectStage
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfProspectStage
     */
    public function setProspectStage(array $ProspectStage = null)
    {
      $this->ProspectStage = $ProspectStage;
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
      return isset($this->ProspectStage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProspectStage
     */
    public function offsetGet($offset)
    {
      return $this->ProspectStage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProspectStage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProspectStage[] = $value;
      } else {
        $this->ProspectStage[$offset] = $value;
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
      unset($this->ProspectStage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProspectStage Return the current element
     */
    public function current()
    {
      return current($this->ProspectStage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProspectStage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProspectStage);
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
      reset($this->ProspectStage);
    }

    /**
     * Countable implementation
     *
     * @return ProspectStage Return count of elements
     */
    public function count()
    {
      return count($this->ProspectStage);
    }

}
