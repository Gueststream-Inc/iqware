<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCManualRateDaily implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cManualRateDaily[] $cManualRateDaily
     */
    protected $cManualRateDaily = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cManualRateDaily[]
     */
    public function getCManualRateDaily()
    {
        return $this->cManualRateDaily;
    }

    /**
     * @param cManualRateDaily[] $cManualRateDaily
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCManualRateDaily
     */
    public function setCManualRateDaily(array $cManualRateDaily = null)
    {
        $this->cManualRateDaily = $cManualRateDaily;
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
        return isset($this->cManualRateDaily[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cManualRateDaily
     */
    public function offsetGet($offset)
    {
        return $this->cManualRateDaily[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cManualRateDaily $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cManualRateDaily[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cManualRateDaily[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cManualRateDaily Return the current element
     */
    public function current()
    {
        return current($this->cManualRateDaily);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cManualRateDaily);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cManualRateDaily);
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
        reset($this->cManualRateDaily);
    }

    /**
     * Countable implementation
     *
     * @return cManualRateDaily Return count of elements
     */
    public function count()
    {
        return count($this->cManualRateDaily);
    }
}
