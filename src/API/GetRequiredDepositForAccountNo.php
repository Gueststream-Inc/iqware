<?php

namespace Gueststream\PMS\IQWare\API;

class GetRequiredDepositForAccountNo
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $confirmationNumber
     */
    protected $confirmationNumber = null;

    /**
     * @param int $intGUID
     * @param int $confirmationNumber
     */
    public function __construct($intGUID, $confirmationNumber)
    {
        $this->intGUID = $intGUID;
        $this->confirmationNumber = $confirmationNumber;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\GetRequiredDepositForAccountNo
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    /**
     * @param int $confirmationNumber
     * @return \Gueststream\PMS\IQWare\API\GetRequiredDepositForAccountNo
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }
}
