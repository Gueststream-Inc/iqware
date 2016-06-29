<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCCreditCard implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cCreditCard[] $cCreditCard
     */
    protected $cCreditCard = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cCreditCard[]
     */
    public function getCCreditCard()
    {
        return $this->cCreditCard;
    }

    /**
     * @param cCreditCard[] $cCreditCard
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCCreditCard
     */
    public function setCCreditCard(array $cCreditCard = null)
    {
        $this->cCreditCard = $cCreditCard;
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
        return isset($this->cCreditCard[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cCreditCard
     */
    public function offsetGet($offset)
    {
        return $this->cCreditCard[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cCreditCard $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cCreditCard[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cCreditCard[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cCreditCard Return the current element
     */
    public function current()
    {
        return current($this->cCreditCard);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cCreditCard);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cCreditCard);
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
        reset($this->cCreditCard);
    }

    /**
     * Countable implementation
     *
     * @return cCreditCard Return count of elements
     */
    public function count()
    {
        return count($this->cCreditCard);
    }
}
