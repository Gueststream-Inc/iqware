<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerListOfInvoicesResponse
{

    /**
     * @var ArrayOfOwnerInvoiceInfo $WebRes_GetCondoOwnerListOfInvoicesResult
     */
    protected $WebRes_GetCondoOwnerListOfInvoicesResult = null;

    /**
     * @param ArrayOfOwnerInvoiceInfo $WebRes_GetCondoOwnerListOfInvoicesResult
     */
    public function __construct($WebRes_GetCondoOwnerListOfInvoicesResult)
    {
        $this->WebRes_GetCondoOwnerListOfInvoicesResult = $WebRes_GetCondoOwnerListOfInvoicesResult;
    }

    /**
     * @return ArrayOfOwnerInvoiceInfo
     */
    public function getWebRes_GetCondoOwnerListOfInvoicesResult()
    {
        return $this->WebRes_GetCondoOwnerListOfInvoicesResult;
    }

    /**
     * @param ArrayOfOwnerInvoiceInfo $WebRes_GetCondoOwnerListOfInvoicesResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerListOfInvoicesResponse
     */
    public function setWebRes_GetCondoOwnerListOfInvoicesResult($WebRes_GetCondoOwnerListOfInvoicesResult)
    {
        $this->WebRes_GetCondoOwnerListOfInvoicesResult = $WebRes_GetCondoOwnerListOfInvoicesResult;
        return $this;
    }
}
