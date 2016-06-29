<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Detail[] $Detail
     */
    protected $Detail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Detail[]
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * @param Detail[] $Detail
     * @return \Gueststream\PMS\IQWare\API\ArrayOfDetail
     */
    public function setDetail(array $Detail = null)
    {
        $this->Detail = $Detail;
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
        return isset($this->Detail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Detail
     */
    public function offsetGet($offset)
    {
        return $this->Detail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Detail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->Detail[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->Detail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Detail Return the current element
     */
    public function current()
    {
        return current($this->Detail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Detail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Detail);
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
        reset($this->Detail);
    }

    /**
     * Countable implementation
     *
     * @return Detail Return count of elements
     */
    public function count()
    {
        return count($this->Detail);
    }
}
