<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetAllMemberReservationsResponse
{

    /**
     * @var ArrayOfDataSet $WebRes_GetAllMemberReservationsResult
     */
    protected $WebRes_GetAllMemberReservationsResult = null;

    /**
     * @param ArrayOfDataSet $WebRes_GetAllMemberReservationsResult
     */
    public function __construct($WebRes_GetAllMemberReservationsResult)
    {
        $this->WebRes_GetAllMemberReservationsResult = $WebRes_GetAllMemberReservationsResult;
    }

    /**
     * @return ArrayOfDataSet
     */
    public function getWebRes_GetAllMemberReservationsResult()
    {
        return $this->WebRes_GetAllMemberReservationsResult;
    }

    /**
     * @param ArrayOfDataSet $WebRes_GetAllMemberReservationsResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetAllMemberReservationsResponse
     */
    public function setWebRes_GetAllMemberReservationsResult($WebRes_GetAllMemberReservationsResult)
    {
        $this->WebRes_GetAllMemberReservationsResult = $WebRes_GetAllMemberReservationsResult;
        return $this;
    }
}
