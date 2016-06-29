<?php

namespace Gueststream\PMS\IQWare\API;

class GetConfirmationFamily
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $confirmationNumber
     */
    protected $confirmationNumber = null;

    /**
     * @param int $guid
     * @param int $confirmationNumber
     */
    public function __construct($guid, $confirmationNumber)
    {
        $this->guid = $guid;
        $this->confirmationNumber = $confirmationNumber;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\GetConfirmationFamily
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
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
     * @return \Gueststream\PMS\IQWare\API\GetConfirmationFamily
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;
        return $this;
    }
}
