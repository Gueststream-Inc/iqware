<?php

namespace Gueststream\PMS\IQWare\API;

class ArrayOfEvaluation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Evaluation[] $Evaluation
     */
    protected $Evaluation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Evaluation[]
     */
    public function getEvaluation()
    {
        return $this->Evaluation;
    }

    /**
     * @param Evaluation[] $Evaluation
     * @return \Gueststream\PMS\IQWare\API\ArrayOfEvaluation
     */
    public function setEvaluation(array $Evaluation = null)
    {
        $this->Evaluation = $Evaluation;
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
        return isset($this->Evaluation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Evaluation
     */
    public function offsetGet($offset)
    {
        return $this->Evaluation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Evaluation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->Evaluation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->Evaluation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Evaluation Return the current element
     */
    public function current()
    {
        return current($this->Evaluation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Evaluation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Evaluation);
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
        reset($this->Evaluation);
    }

    /**
     * Countable implementation
     *
     * @return Evaluation Return count of elements
     */
    public function count()
    {
        return count($this->Evaluation);
    }
}
