<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfAvailableSuite implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailableSuite[] $AvailableSuite
     */
    protected $AvailableSuite = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableSuite[]
     */
    public function getAvailableSuite()
    {
        return $this->AvailableSuite;
    }

    /**
     * @param AvailableSuite[] $AvailableSuite
     * @return \Gueststream\PMS\IQWare\API\ArrayOfAvailableSuite
     */
    public function setAvailableSuite(array $AvailableSuite = null)
    {
        $this->AvailableSuite = $AvailableSuite;
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
        return isset($this->AvailableSuite[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailableSuite
     */
    public function offsetGet($offset)
    {
        return $this->AvailableSuite[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailableSuite $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->AvailableSuite[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->AvailableSuite[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailableSuite Return the current element
     */
    public function current()
    {
        return current($this->AvailableSuite);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->AvailableSuite);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->AvailableSuite);
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
        reset($this->AvailableSuite);
    }

    /**
     * Countable implementation
     *
     * @return AvailableSuite Return count of elements
     */
    public function count()
    {
        return count($this->AvailableSuite);
    }
}
