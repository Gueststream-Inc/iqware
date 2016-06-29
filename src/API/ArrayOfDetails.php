<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Details[] $Details
     */
    protected $Details = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Details[]
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param Details[] $Details
     * @return \Gueststream\PMS\IQWare\API\ArrayOfDetails
     */
    public function setDetails(array $Details = null)
    {
        $this->Details = $Details;
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
        return isset($this->Details[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Details
     */
    public function offsetGet($offset)
    {
        return $this->Details[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Details $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->Details[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->Details[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Details Return the current element
     */
    public function current()
    {
        return current($this->Details);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Details);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Details);
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
        reset($this->Details);
    }

    /**
     * Countable implementation
     *
     * @return Details Return count of elements
     */
    public function count()
    {
        return count($this->Details);
    }
}
