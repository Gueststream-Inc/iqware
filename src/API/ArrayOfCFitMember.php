<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCFitMember implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cFitMember[] $cFitMember
     */
    protected $cFitMember = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cFitMember[]
     */
    public function getCFitMember()
    {
        return $this->cFitMember;
    }

    /**
     * @param cFitMember[] $cFitMember
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCFitMember
     */
    public function setCFitMember(array $cFitMember = null)
    {
        $this->cFitMember = $cFitMember;
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
        return isset($this->cFitMember[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cFitMember
     */
    public function offsetGet($offset)
    {
        return $this->cFitMember[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cFitMember $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cFitMember[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cFitMember[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cFitMember Return the current element
     */
    public function current()
    {
        return current($this->cFitMember);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cFitMember);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cFitMember);
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
        reset($this->cFitMember);
    }

    /**
     * Countable implementation
     *
     * @return cFitMember Return count of elements
     */
    public function count()
    {
        return count($this->cFitMember);
    }
}
