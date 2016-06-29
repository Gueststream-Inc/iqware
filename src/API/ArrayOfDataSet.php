<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfDataSet implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DataSet[] $DataSet
     */
    protected $DataSet = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DataSet[]
     */
    public function getDataSet()
    {
        return $this->DataSet;
    }

    /**
     * @param DataSet[] $DataSet
     * @return \Gueststream\PMS\IQWare\API\ArrayOfDataSet
     */
    public function setDataSet(array $DataSet = null)
    {
        $this->DataSet = $DataSet;
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
        return isset($this->DataSet[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DataSet
     */
    public function offsetGet($offset)
    {
        return $this->DataSet[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DataSet $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->DataSet[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->DataSet[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DataSet Return the current element
     */
    public function current()
    {
        return current($this->DataSet);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->DataSet);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->DataSet);
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
        reset($this->DataSet);
    }

    /**
     * Countable implementation
     *
     * @return DataSet Return count of elements
     */
    public function count()
    {
        return count($this->DataSet);
    }
}
