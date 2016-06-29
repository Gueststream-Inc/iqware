<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getServicesChargesResponse
{

    /**
     * @var WebRes_getServicesChargesResult $WebRes_getServicesChargesResult
     */
    protected $WebRes_getServicesChargesResult = null;

    /**
     * @param WebRes_getServicesChargesResult $WebRes_getServicesChargesResult
     */
    public function __construct($WebRes_getServicesChargesResult)
    {
        $this->WebRes_getServicesChargesResult = $WebRes_getServicesChargesResult;
    }

    /**
     * @return WebRes_getServicesChargesResult
     */
    public function getWebRes_getServicesChargesResult()
    {
        return $this->WebRes_getServicesChargesResult;
    }

    /**
     * @param WebRes_getServicesChargesResult $WebRes_getServicesChargesResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getServicesChargesResponse
     */
    public function setWebRes_getServicesChargesResult($WebRes_getServicesChargesResult)
    {
        $this->WebRes_getServicesChargesResult = $WebRes_getServicesChargesResult;
        return $this;
    }
}
