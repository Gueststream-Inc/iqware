<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfSuiteInventory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SuiteInventory[] $SuiteInventory
     */
    protected $SuiteInventory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SuiteInventory[]
     */
    public function getSuiteInventory()
    {
        return $this->SuiteInventory;
    }

    /**
     * @param SuiteInventory[] $SuiteInventory
     * @return \Gueststream\PMS\IQWare\API\ArrayOfSuiteInventory
     */
    public function setSuiteInventory(array $SuiteInventory = null)
    {
        $this->SuiteInventory = $SuiteInventory;
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
        return isset($this->SuiteInventory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SuiteInventory
     */
    public function offsetGet($offset)
    {
        return $this->SuiteInventory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SuiteInventory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->SuiteInventory[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->SuiteInventory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SuiteInventory Return the current element
     */
    public function current()
    {
        return current($this->SuiteInventory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SuiteInventory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SuiteInventory);
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
        reset($this->SuiteInventory);
    }

    /**
     * Countable implementation
     *
     * @return SuiteInventory Return count of elements
     */
    public function count()
    {
        return count($this->SuiteInventory);
    }
}
