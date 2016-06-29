<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfSummaryItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SummaryItem[] $SummaryItem
     */
    protected $SummaryItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SummaryItem[]
     */
    public function getSummaryItem()
    {
        return $this->SummaryItem;
    }

    /**
     * @param SummaryItem[] $SummaryItem
     * @return \Gueststream\PMS\IQWare\API\ArrayOfSummaryItem
     */
    public function setSummaryItem(array $SummaryItem = null)
    {
        $this->SummaryItem = $SummaryItem;
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
        return isset($this->SummaryItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SummaryItem
     */
    public function offsetGet($offset)
    {
        return $this->SummaryItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SummaryItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->SummaryItem[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->SummaryItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SummaryItem Return the current element
     */
    public function current()
    {
        return current($this->SummaryItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->SummaryItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->SummaryItem);
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
        reset($this->SummaryItem);
    }

    /**
     * Countable implementation
     *
     * @return SummaryItem Return count of elements
     */
    public function count()
    {
        return count($this->SummaryItem);
    }
}
