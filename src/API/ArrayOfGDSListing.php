<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfGDSListing implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GDSListing[] $GDSListing
     */
    protected $GDSListing = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GDSListing[]
     */
    public function getGDSListing()
    {
        return $this->GDSListing;
    }

    /**
     * @param GDSListing[] $GDSListing
     * @return \Gueststream\PMS\IQWare\API\ArrayOfGDSListing
     */
    public function setGDSListing(array $GDSListing = null)
    {
        $this->GDSListing = $GDSListing;
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
        return isset($this->GDSListing[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GDSListing
     */
    public function offsetGet($offset)
    {
        return $this->GDSListing[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GDSListing $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->GDSListing[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->GDSListing[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GDSListing Return the current element
     */
    public function current()
    {
        return current($this->GDSListing);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->GDSListing);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->GDSListing);
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
        reset($this->GDSListing);
    }

    /**
     * Countable implementation
     *
     * @return GDSListing Return count of elements
     */
    public function count()
    {
        return count($this->GDSListing);
    }
}
