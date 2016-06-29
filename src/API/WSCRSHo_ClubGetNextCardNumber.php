<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubGetNextCardNumber
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var int $ClubNo
     */
    protected $ClubNo = null;

    /**
     * @param int $GUID
     * @param int $ClubNo
     */
    public function __construct($GUID, $ClubNo)
    {
        $this->GUID = $GUID;
        $this->ClubNo = $ClubNo;
    }

    /**
     * @return int
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $GUID
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubGetNextCardNumber
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getClubNo()
    {
        return $this->ClubNo;
    }

    /**
     * @param int $ClubNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubGetNextCardNumber
     */
    public function setClubNo($ClubNo)
    {
        $this->ClubNo = $ClubNo;
        return $this;
    }
}
