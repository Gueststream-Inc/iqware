<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfShort implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var short[] $short
     */
    protected $short = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return short[]
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * @param short[] $short
     * @return \Gueststream\PMS\IQWare\API\ArrayOfShort
     */
    public function setShort(array $short = null)
    {
        $this->short = $short;
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
        return isset($this->short[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return short
     */
    public function offsetGet($offset)
    {
        return $this->short[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param short $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->short[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->short[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return short Return the current element
     */
    public function current()
    {
        return current($this->short);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->short);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->short);
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
        reset($this->short);
    }

    /**
     * Countable implementation
     *
     * @return short Return count of elements
     */
    public function count()
    {
        return count($this->short);
    }
}
