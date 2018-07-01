<?php

namespace Nlocascio\Mindbody\MBOSoap;

class ArrayOfMembershipTypeRestriction implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MembershipTypeRestriction[] $MembershipTypeRestriction
     */
    public $MembershipTypeRestriction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MembershipTypeRestriction[]
     */
    public function getMembershipTypeRestriction()
    {
      return $this->MembershipTypeRestriction;
    }

    /**
     * @param MembershipTypeRestriction[] $MembershipTypeRestriction
     * @return \Nlocascio\Mindbody\MBOSoap\ArrayOfMembershipTypeRestriction
     */
    public function setMembershipTypeRestriction(array $MembershipTypeRestriction = null)
    {
      $this->MembershipTypeRestriction = $MembershipTypeRestriction;
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
      return isset($this->MembershipTypeRestriction[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MembershipTypeRestriction
     */
    public function offsetGet($offset)
    {
      return $this->MembershipTypeRestriction[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MembershipTypeRestriction $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MembershipTypeRestriction[] = $value;
      } else {
        $this->MembershipTypeRestriction[$offset] = $value;
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
      unset($this->MembershipTypeRestriction[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MembershipTypeRestriction Return the current element
     */
    public function current()
    {
      return current($this->MembershipTypeRestriction);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MembershipTypeRestriction);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MembershipTypeRestriction);
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
      reset($this->MembershipTypeRestriction);
    }

    /**
     * Countable implementation
     *
     * @return MembershipTypeRestriction Return count of elements
     */
    public function count()
    {
      return count($this->MembershipTypeRestriction);
    }

}
