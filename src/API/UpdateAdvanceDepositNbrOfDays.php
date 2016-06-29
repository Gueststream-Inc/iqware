<?php

namespace Gueststream\PMS\IQWare\API;

class UpdateAdvanceDepositNbrOfDays
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $Nbdays
     */
    protected $Nbdays = null;

    /**
     * @var int $LevelNo
     */
    protected $LevelNo = null;

    /**
     * @var int $confirmationNo
     */
    protected $confirmationNo = null;

    /**
     * @var boolean $IsSpecific
     */
    protected $IsSpecific = null;

    /**
     * @param int $intGUID
     * @param int $Nbdays
     * @param int $LevelNo
     * @param int $confirmationNo
     * @param boolean $IsSpecific
     */
    public function __construct($intGUID, $Nbdays, $LevelNo, $confirmationNo, $IsSpecific)
    {
        $this->intGUID = $intGUID;
        $this->Nbdays = $Nbdays;
        $this->LevelNo = $LevelNo;
        $this->confirmationNo = $confirmationNo;
        $this->IsSpecific = $IsSpecific;
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
     * @return \Gueststream\PMS\IQWare\API\UpdateAdvanceDepositNbrOfDays
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbdays()
    {
        return $this->Nbdays;
    }

    /**
     * @param int $Nbdays
     * @return \Gueststream\PMS\IQWare\API\UpdateAdvanceDepositNbrOfDays
     */
    public function setNbdays($Nbdays)
    {
        $this->Nbdays = $Nbdays;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevelNo()
    {
        return $this->LevelNo;
    }

    /**
     * @param int $LevelNo
     * @return \Gueststream\PMS\IQWare\API\UpdateAdvanceDepositNbrOfDays
     */
    public function setLevelNo($LevelNo)
    {
        $this->LevelNo = $LevelNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfirmationNo()
    {
        return $this->confirmationNo;
    }

    /**
     * @param int $confirmationNo
     * @return \Gueststream\PMS\IQWare\API\UpdateAdvanceDepositNbrOfDays
     */
    public function setConfirmationNo($confirmationNo)
    {
        $this->confirmationNo = $confirmationNo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSpecific()
    {
        return $this->IsSpecific;
    }

    /**
     * @param boolean $IsSpecific
     * @return \Gueststream\PMS\IQWare\API\UpdateAdvanceDepositNbrOfDays
     */
    public function setIsSpecific($IsSpecific)
    {
        $this->IsSpecific = $IsSpecific;
        return $this;
    }
}
