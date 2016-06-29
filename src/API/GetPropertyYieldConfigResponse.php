<?php

namespace Gueststream\PMS\IQWare\API;

class GetPropertyYieldConfigResponse
{

    /**
     * @var PropertyYieldConfig $GetPropertyYieldConfigResult
     */
    protected $GetPropertyYieldConfigResult = null;

    /**
     * @param PropertyYieldConfig $GetPropertyYieldConfigResult
     */
    public function __construct($GetPropertyYieldConfigResult)
    {
        $this->GetPropertyYieldConfigResult = $GetPropertyYieldConfigResult;
    }

    /**
     * @return PropertyYieldConfig
     */
    public function getGetPropertyYieldConfigResult()
    {
        return $this->GetPropertyYieldConfigResult;
    }

    /**
     * @param PropertyYieldConfig $GetPropertyYieldConfigResult
     * @return \Gueststream\PMS\IQWare\API\GetPropertyYieldConfigResponse
     */
    public function setGetPropertyYieldConfigResult($GetPropertyYieldConfigResult)
    {
        $this->GetPropertyYieldConfigResult = $GetPropertyYieldConfigResult;
        return $this;
    }
}
