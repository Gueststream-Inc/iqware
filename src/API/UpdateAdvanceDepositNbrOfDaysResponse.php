<?php

namespace Gueststream\PMS\IQWare\API;

class UpdateAdvanceDepositNbrOfDaysResponse
{

    /**
     * @var string $UpdateAdvanceDepositNbrOfDaysResult
     */
    protected $UpdateAdvanceDepositNbrOfDaysResult = null;

    /**
     * @param string $UpdateAdvanceDepositNbrOfDaysResult
     */
    public function __construct($UpdateAdvanceDepositNbrOfDaysResult)
    {
        $this->UpdateAdvanceDepositNbrOfDaysResult = $UpdateAdvanceDepositNbrOfDaysResult;
    }

    /**
     * @return string
     */
    public function getUpdateAdvanceDepositNbrOfDaysResult()
    {
        return $this->UpdateAdvanceDepositNbrOfDaysResult;
    }

    /**
     * @param string $UpdateAdvanceDepositNbrOfDaysResult
     * @return \Gueststream\PMS\IQWare\API\UpdateAdvanceDepositNbrOfDaysResponse
     */
    public function setUpdateAdvanceDepositNbrOfDaysResult($UpdateAdvanceDepositNbrOfDaysResult)
    {
        $this->UpdateAdvanceDepositNbrOfDaysResult = $UpdateAdvanceDepositNbrOfDaysResult;
        return $this;
    }
}
