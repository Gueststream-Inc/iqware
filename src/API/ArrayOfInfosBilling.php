<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfInfosBilling implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InfosBilling[] $InfosBilling
     */
    protected $InfosBilling = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InfosBilling[]
     */
    public function getInfosBilling()
    {
        return $this->InfosBilling;
    }

    /**
     * @param InfosBilling[] $InfosBilling
     * @return \Gueststream\PMS\IQWare\API\ArrayOfInfosBilling
     */
    public function setInfosBilling(array $InfosBilling = null)
    {
        $this->InfosBilling = $InfosBilling;
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
        return isset($this->InfosBilling[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InfosBilling
     */
    public function offsetGet($offset)
    {
        return $this->InfosBilling[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InfosBilling $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->InfosBilling[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->InfosBilling[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InfosBilling Return the current element
     */
    public function current()
    {
        return current($this->InfosBilling);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->InfosBilling);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->InfosBilling);
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
        reset($this->InfosBilling);
    }

    /**
     * Countable implementation
     *
     * @return InfosBilling Return count of elements
     */
    public function count()
    {
        return count($this->InfosBilling);
    }
}
