<?php

namespace Gueststream\PMS\IQWare\API;

class GetIQImageFTPInfoResponse
{

    /**
     * @var IQImageFTPInfo $GetIQImageFTPInfoResult
     */
    protected $GetIQImageFTPInfoResult = null;

    /**
     * @param IQImageFTPInfo $GetIQImageFTPInfoResult
     */
    public function __construct($GetIQImageFTPInfoResult)
    {
        $this->GetIQImageFTPInfoResult = $GetIQImageFTPInfoResult;
    }

    /**
     * @return IQImageFTPInfo
     */
    public function getGetIQImageFTPInfoResult()
    {
        return $this->GetIQImageFTPInfoResult;
    }

    /**
     * @param IQImageFTPInfo $GetIQImageFTPInfoResult
     * @return \Gueststream\PMS\IQWare\API\GetIQImageFTPInfoResponse
     */
    public function setGetIQImageFTPInfoResult($GetIQImageFTPInfoResult)
    {
        $this->GetIQImageFTPInfoResult = $GetIQImageFTPInfoResult;
        return $this;
    }
}
