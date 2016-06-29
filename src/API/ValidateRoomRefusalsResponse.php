<?php

namespace Gueststream\PMS\IQWare\API;

class ValidateRoomRefusalsResponse
{

    /**
     * @var ArrayOfRefusal $ValidateRoomRefusalsResult
     */
    protected $ValidateRoomRefusalsResult = null;

    /**
     * @param ArrayOfRefusal $ValidateRoomRefusalsResult
     */
    public function __construct($ValidateRoomRefusalsResult)
    {
        $this->ValidateRoomRefusalsResult = $ValidateRoomRefusalsResult;
    }

    /**
     * @return ArrayOfRefusal
     */
    public function getValidateRoomRefusalsResult()
    {
        return $this->ValidateRoomRefusalsResult;
    }

    /**
     * @param ArrayOfRefusal $ValidateRoomRefusalsResult
     * @return \Gueststream\PMS\IQWare\API\ValidateRoomRefusalsResponse
     */
    public function setValidateRoomRefusalsResult($ValidateRoomRefusalsResult)
    {
        $this->ValidateRoomRefusalsResult = $ValidateRoomRefusalsResult;
        return $this;
    }
}
