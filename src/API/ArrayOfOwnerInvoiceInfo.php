<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfOwnerInvoiceInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OwnerInvoiceInfo[] $OwnerInvoiceInfo
     */
    protected $OwnerInvoiceInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OwnerInvoiceInfo[]
     */
    public function getOwnerInvoiceInfo()
    {
        return $this->OwnerInvoiceInfo;
    }

    /**
     * @param OwnerInvoiceInfo[] $OwnerInvoiceInfo
     * @return \Gueststream\PMS\IQWare\API\ArrayOfOwnerInvoiceInfo
     */
    public function setOwnerInvoiceInfo(array $OwnerInvoiceInfo = null)
    {
        $this->OwnerInvoiceInfo = $OwnerInvoiceInfo;
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
        return isset($this->OwnerInvoiceInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OwnerInvoiceInfo
     */
    public function offsetGet($offset)
    {
        return $this->OwnerInvoiceInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OwnerInvoiceInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->OwnerInvoiceInfo[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->OwnerInvoiceInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OwnerInvoiceInfo Return the current element
     */
    public function current()
    {
        return current($this->OwnerInvoiceInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->OwnerInvoiceInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->OwnerInvoiceInfo);
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
        reset($this->OwnerInvoiceInfo);
    }

    /**
     * Countable implementation
     *
     * @return OwnerInvoiceInfo Return count of elements
     */
    public function count()
    {
        return count($this->OwnerInvoiceInfo);
    }
}
