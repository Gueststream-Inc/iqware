<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCFolioDist implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cFolioDist[] $cFolioDist
     */
    protected $cFolioDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cFolioDist[]
     */
    public function getCFolioDist()
    {
        return $this->cFolioDist;
    }

    /**
     * @param cFolioDist[] $cFolioDist
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCFolioDist
     */
    public function setCFolioDist(array $cFolioDist = null)
    {
        $this->cFolioDist = $cFolioDist;
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
        return isset($this->cFolioDist[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cFolioDist
     */
    public function offsetGet($offset)
    {
        return $this->cFolioDist[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cFolioDist $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cFolioDist[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cFolioDist[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cFolioDist Return the current element
     */
    public function current()
    {
        return current($this->cFolioDist);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cFolioDist);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cFolioDist);
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
        reset($this->cFolioDist);
    }

    /**
     * Countable implementation
     *
     * @return cFolioDist Return count of elements
     */
    public function count()
    {
        return count($this->cFolioDist);
    }
}
