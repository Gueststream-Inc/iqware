<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitReservationsResponse
{

    /**
     * @var ArrayOfUnitReservation $GetUnitReservationsResult
     */
    protected $GetUnitReservationsResult = null;

    /**
     * @param ArrayOfUnitReservation $GetUnitReservationsResult
     */
    public function __construct($GetUnitReservationsResult)
    {
        $this->GetUnitReservationsResult = $GetUnitReservationsResult;
    }

    /**
     * @return ArrayOfUnitReservation
     */
    public function getGetUnitReservationsResult()
    {
        return $this->GetUnitReservationsResult;
    }

    /**
     * @param ArrayOfUnitReservation $GetUnitReservationsResult
     * @return \Gueststream\PMS\IQWare\API\GetUnitReservationsResponse
     */
    public function setGetUnitReservationsResult($GetUnitReservationsResult)
    {
        $this->GetUnitReservationsResult = $GetUnitReservationsResult;
        return $this;
    }
}
