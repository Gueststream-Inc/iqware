<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfMemberReservation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MemberReservation[] $MemberReservation
     */
    protected $MemberReservation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MemberReservation[]
     */
    public function getMemberReservation()
    {
        return $this->MemberReservation;
    }

    /**
     * @param MemberReservation[] $MemberReservation
     * @return \Gueststream\PMS\IQWare\API\ArrayOfMemberReservation
     */
    public function setMemberReservation(array $MemberReservation = null)
    {
        $this->MemberReservation = $MemberReservation;
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
        return isset($this->MemberReservation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MemberReservation
     */
    public function offsetGet($offset)
    {
        return $this->MemberReservation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MemberReservation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->MemberReservation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->MemberReservation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MemberReservation Return the current element
     */
    public function current()
    {
        return current($this->MemberReservation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->MemberReservation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->MemberReservation);
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
        reset($this->MemberReservation);
    }

    /**
     * Countable implementation
     *
     * @return MemberReservation Return count of elements
     */
    public function count()
    {
        return count($this->MemberReservation);
    }
}
