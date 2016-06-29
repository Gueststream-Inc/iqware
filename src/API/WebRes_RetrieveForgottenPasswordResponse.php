<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_RetrieveForgottenPasswordResponse
{

    /**
     * @var GlobalAccess $WebRes_RetrieveForgottenPasswordResult
     */
    protected $WebRes_RetrieveForgottenPasswordResult = null;

    /**
     * @param GlobalAccess $WebRes_RetrieveForgottenPasswordResult
     */
    public function __construct($WebRes_RetrieveForgottenPasswordResult)
    {
        $this->WebRes_RetrieveForgottenPasswordResult = $WebRes_RetrieveForgottenPasswordResult;
    }

    /**
     * @return GlobalAccess
     */
    public function getWebRes_RetrieveForgottenPasswordResult()
    {
        return $this->WebRes_RetrieveForgottenPasswordResult;
    }

    /**
     * @param GlobalAccess $WebRes_RetrieveForgottenPasswordResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_RetrieveForgottenPasswordResponse
     */
    public function setWebRes_RetrieveForgottenPasswordResult($WebRes_RetrieveForgottenPasswordResult)
    {
        $this->WebRes_RetrieveForgottenPasswordResult = $WebRes_RetrieveForgottenPasswordResult;
        return $this;
    }
}
