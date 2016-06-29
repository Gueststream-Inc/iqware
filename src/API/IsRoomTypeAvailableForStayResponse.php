<?php

namespace Gueststream\PMS\IQWare\API;

class IsRoomTypeAvailableForStayResponse
{

    /**
     * @var boolean $IsRoomTypeAvailableForStayResult
     */
    protected $IsRoomTypeAvailableForStayResult = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param boolean $IsRoomTypeAvailableForStayResult
     * @param string $Message
     */
    public function __construct($IsRoomTypeAvailableForStayResult, $Message)
    {
        $this->IsRoomTypeAvailableForStayResult = $IsRoomTypeAvailableForStayResult;
        $this->Message = $Message;
    }

    /**
     * @return boolean
     */
    public function getIsRoomTypeAvailableForStayResult()
    {
        return $this->IsRoomTypeAvailableForStayResult;
    }

    /**
     * @param boolean $IsRoomTypeAvailableForStayResult
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStayResponse
     */
    public function setIsRoomTypeAvailableForStayResult($IsRoomTypeAvailableForStayResult)
    {
        $this->IsRoomTypeAvailableForStayResult = $IsRoomTypeAvailableForStayResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStayResponse
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }
}
