<?php

namespace Gueststream\PMS\IQWare\API;

class MemberGetReservations
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var int $MemberFolio
     */
    protected $MemberFolio = null;

    /**
     * @param int $GUID
     * @param int $MemberFolio
     */
    public function __construct($GUID, $MemberFolio)
    {
        $this->GUID = $GUID;
        $this->MemberFolio = $MemberFolio;
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
     * @return \Gueststream\PMS\IQWare\API\MemberGetReservations
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemberFolio()
    {
        return $this->MemberFolio;
    }

    /**
     * @param int $MemberFolio
     * @return \Gueststream\PMS\IQWare\API\MemberGetReservations
     */
    public function setMemberFolio($MemberFolio)
    {
        $this->MemberFolio = $MemberFolio;
        return $this;
    }
}
