<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_GetCodesPublished
{

    /**
     * @var TCodeType $CodeType
     */
    protected $CodeType = null;

    /**
     * @param TCodeType $CodeType
     */
    public function __construct($CodeType)
    {
        $this->CodeType = $CodeType;
    }

    /**
     * @return TCodeType
     */
    public function getCodeType()
    {
        return $this->CodeType;
    }

    /**
     * @param TCodeType $CodeType
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_GetCodesPublished
     */
    public function setCodeType($CodeType)
    {
        $this->CodeType = $CodeType;
        return $this;
    }
}
