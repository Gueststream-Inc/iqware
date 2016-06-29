<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfMarkupItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MarkupItem[] $MarkupItem
     */
    protected $MarkupItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MarkupItem[]
     */
    public function getMarkupItem()
    {
        return $this->MarkupItem;
    }

    /**
     * @param MarkupItem[] $MarkupItem
     * @return \Gueststream\PMS\IQWare\API\ArrayOfMarkupItem
     */
    public function setMarkupItem(array $MarkupItem = null)
    {
        $this->MarkupItem = $MarkupItem;
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
        return isset($this->MarkupItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MarkupItem
     */
    public function offsetGet($offset)
    {
        return $this->MarkupItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MarkupItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->MarkupItem[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->MarkupItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MarkupItem Return the current element
     */
    public function current()
    {
        return current($this->MarkupItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->MarkupItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->MarkupItem);
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
        reset($this->MarkupItem);
    }

    /**
     * Countable implementation
     *
     * @return MarkupItem Return count of elements
     */
    public function count()
    {
        return count($this->MarkupItem);
    }
}
