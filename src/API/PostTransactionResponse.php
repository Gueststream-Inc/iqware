<?php

namespace Gueststream\PMS\IQWare\API;

class PostTransactionResponse
{

    /**
     * @var int $PostTransactionResult
     */
    protected $PostTransactionResult = null;

    /**
     * @param int $PostTransactionResult
     */
    public function __construct($PostTransactionResult)
    {
        $this->PostTransactionResult = $PostTransactionResult;
    }

    /**
     * @return int
     */
    public function getPostTransactionResult()
    {
        return $this->PostTransactionResult;
    }

    /**
     * @param int $PostTransactionResult
     * @return \Gueststream\PMS\IQWare\API\PostTransactionResponse
     */
    public function setPostTransactionResult($PostTransactionResult)
    {
        $this->PostTransactionResult = $PostTransactionResult;
        return $this;
    }
}
