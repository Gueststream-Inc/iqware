<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerInvoiceByIDResponse
{

    /**
     * @var OwnerInvoiceData $WebRes_GetCondoOwnerInvoiceByIDResult
     */
    protected $WebRes_GetCondoOwnerInvoiceByIDResult = null;

    /**
     * @param OwnerInvoiceData $WebRes_GetCondoOwnerInvoiceByIDResult
     */
    public function __construct($WebRes_GetCondoOwnerInvoiceByIDResult)
    {
        $this->WebRes_GetCondoOwnerInvoiceByIDResult = $WebRes_GetCondoOwnerInvoiceByIDResult;
    }

    /**
     * @return OwnerInvoiceData
     */
    public function getWebRes_GetCondoOwnerInvoiceByIDResult()
    {
        return $this->WebRes_GetCondoOwnerInvoiceByIDResult;
    }

    /**
     * @param OwnerInvoiceData $WebRes_GetCondoOwnerInvoiceByIDResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerInvoiceByIDResponse
     */
    public function setWebRes_GetCondoOwnerInvoiceByIDResult($WebRes_GetCondoOwnerInvoiceByIDResult)
    {
        $this->WebRes_GetCondoOwnerInvoiceByIDResult = $WebRes_GetCondoOwnerInvoiceByIDResult;
        return $this;
    }
}
