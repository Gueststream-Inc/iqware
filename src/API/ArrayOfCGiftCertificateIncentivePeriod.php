<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfCGiftCertificateIncentivePeriod implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var cGiftCertificateIncentivePeriod[] $cGiftCertificateIncentivePeriod
     */
    protected $cGiftCertificateIncentivePeriod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return cGiftCertificateIncentivePeriod[]
     */
    public function getCGiftCertificateIncentivePeriod()
    {
        return $this->cGiftCertificateIncentivePeriod;
    }

    /**
     * @param cGiftCertificateIncentivePeriod[] $cGiftCertificateIncentivePeriod
     * @return \Gueststream\PMS\IQWare\API\ArrayOfCGiftCertificateIncentivePeriod
     */
    public function setCGiftCertificateIncentivePeriod(array $cGiftCertificateIncentivePeriod = null)
    {
        $this->cGiftCertificateIncentivePeriod = $cGiftCertificateIncentivePeriod;
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
        return isset($this->cGiftCertificateIncentivePeriod[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return cGiftCertificateIncentivePeriod
     */
    public function offsetGet($offset)
    {
        return $this->cGiftCertificateIncentivePeriod[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param cGiftCertificateIncentivePeriod $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->cGiftCertificateIncentivePeriod[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->cGiftCertificateIncentivePeriod[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return cGiftCertificateIncentivePeriod Return the current element
     */
    public function current()
    {
        return current($this->cGiftCertificateIncentivePeriod);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->cGiftCertificateIncentivePeriod);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->cGiftCertificateIncentivePeriod);
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
        reset($this->cGiftCertificateIncentivePeriod);
    }

    /**
     * Countable implementation
     *
     * @return cGiftCertificateIncentivePeriod Return count of elements
     */
    public function count()
    {
        return count($this->cGiftCertificateIncentivePeriod);
    }
}
