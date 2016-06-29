<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerAdminReservationsResponse
{

    /**
     * @var WebRes_GetCondoOwnerAdminReservationsResult $WebRes_GetCondoOwnerAdminReservationsResult
     */
    protected $WebRes_GetCondoOwnerAdminReservationsResult = null;

    /**
     * @param WebRes_GetCondoOwnerAdminReservationsResult $WebRes_GetCondoOwnerAdminReservationsResult
     */
    public function __construct($WebRes_GetCondoOwnerAdminReservationsResult)
    {
        $this->WebRes_GetCondoOwnerAdminReservationsResult = $WebRes_GetCondoOwnerAdminReservationsResult;
    }

    /**
     * @return WebRes_GetCondoOwnerAdminReservationsResult
     */
    public function getWebRes_GetCondoOwnerAdminReservationsResult()
    {
        return $this->WebRes_GetCondoOwnerAdminReservationsResult;
    }

    /**
     * @param WebRes_GetCondoOwnerAdminReservationsResult $WebRes_GetCondoOwnerAdminReservationsResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerAdminReservationsResponse
     */
    public function setWebRes_GetCondoOwnerAdminReservationsResult($WebRes_GetCondoOwnerAdminReservationsResult)
    {
        $this->WebRes_GetCondoOwnerAdminReservationsResult = $WebRes_GetCondoOwnerAdminReservationsResult;
        return $this;
    }
}
