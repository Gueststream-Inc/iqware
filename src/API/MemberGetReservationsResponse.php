<?php

namespace Gueststream\PMS\IQWare\API;

class MemberGetReservationsResponse
{

    /**
     * @var ArrayOfMemberReservation $MemberGetReservationsResult
     */
    protected $MemberGetReservationsResult = null;

    /**
     * @param ArrayOfMemberReservation $MemberGetReservationsResult
     */
    public function __construct($MemberGetReservationsResult)
    {
        $this->MemberGetReservationsResult = $MemberGetReservationsResult;
    }

    /**
     * @return ArrayOfMemberReservation
     */
    public function getMemberGetReservationsResult()
    {
        return $this->MemberGetReservationsResult;
    }

    /**
     * @param ArrayOfMemberReservation $MemberGetReservationsResult
     * @return \Gueststream\PMS\IQWare\API\MemberGetReservationsResponse
     */
    public function setMemberGetReservationsResult($MemberGetReservationsResult)
    {
        $this->MemberGetReservationsResult = $MemberGetReservationsResult;
        return $this;
    }
}
