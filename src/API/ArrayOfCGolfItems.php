<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCGolfItems implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cGolfItems[] $cGolfItems
     */
    protected $cGolfItems = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cGolfItems[]
     */
    public function getCGolfItems()
    {
        return $this->cGolfItems;
    }

    /**
     * @param cGolfItems[] $cGolfItems
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCGolfItems
     */
    public function setCGolfItems(array $cGolfItems = null)
    {
        $this->cGolfItems = $cGolfItems;
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
        return isset($this->cGolfItems[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cGolfItems
     */
    public function offsetGet($offset)
    {
        return $this->cGolfItems[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cGolfItems $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cGolfItems[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cGolfItems[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cGolfItems Return the current element
     */
    public function current()
    {
        return current($this->cGolfItems);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cGolfItems);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cGolfItems);
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
        reset($this->cGolfItems);
    }

    /**
     * Countable implementation
     *
     * @return cGolfItems Return count of elements
     */
    public function count()
    {
        return count($this->cGolfItems);
    }
}
