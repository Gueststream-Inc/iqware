<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfStayValue3 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StayValue3[] $StayValue3
     */
    protected $StayValue3 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StayValue3[]
     */
    public function getStayValue3()
    {
        return $this->StayValue3;
    }

    /**
     * @param StayValue3[] $StayValue3
     * @return \Gueststream\PMS\IQWare\API\ArrayOfStayValue3
     */
    public function setStayValue3(array $StayValue3 = null)
    {
        $this->StayValue3 = $StayValue3;
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
        return isset($this->StayValue3[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StayValue3
     */
    public function offsetGet($offset)
    {
        return $this->StayValue3[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StayValue3 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->StayValue3[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->StayValue3[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StayValue3 Return the current element
     */
    public function current()
    {
        return current($this->StayValue3);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->StayValue3);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->StayValue3);
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
        reset($this->StayValue3);
    }

    /**
     * Countable implementation
     *
     * @return StayValue3 Return count of elements
     */
    public function count()
    {
        return count($this->StayValue3);
    }
}
