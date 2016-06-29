<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetOwnerPdfResponse
{

    /**
     * @var base64Binary $WebRes_GetOwnerPdfResult
     */
    protected $WebRes_GetOwnerPdfResult = null;

    /**
     * @param base64Binary $WebRes_GetOwnerPdfResult
     */
    public function __construct($WebRes_GetOwnerPdfResult)
    {
        $this->WebRes_GetOwnerPdfResult = $WebRes_GetOwnerPdfResult;
    }

    /**
     * @return base64Binary
     */
    public function getWebRes_GetOwnerPdfResult()
    {
        return $this->WebRes_GetOwnerPdfResult;
    }

    /**
     * @param base64Binary $WebRes_GetOwnerPdfResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerPdfResponse
     */
    public function setWebRes_GetOwnerPdfResult($WebRes_GetOwnerPdfResult)
    {
        $this->WebRes_GetOwnerPdfResult = $WebRes_GetOwnerPdfResult;
        return $this;
    }
}
