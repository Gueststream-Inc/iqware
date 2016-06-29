<?php

namespace Gueststream\PMS\IQWare\API;

class CancelReservation
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var int $CxlReasonID
     */
    protected $CxlReasonID = null;

    /**
     * @var string $CxlMessage
     */
    protected $CxlMessage = null;

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @param int $AccountNo
     * @param int $CxlReasonID
     * @param string $CxlMessage
     * @param int $intGUID
     */
    public function __construct($AccountNo, $CxlReasonID, $CxlMessage, $intGUID)
    {
        $this->AccountNo = $AccountNo;
        $this->CxlReasonID = $CxlReasonID;
        $this->CxlMessage = $CxlMessage;
        $this->intGUID = $intGUID;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\API\CancelReservation
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getCxlReasonID()
    {
        return $this->CxlReasonID;
    }

    /**
     * @param int $CxlReasonID
     * @return \Gueststream\PMS\IQWare\API\CancelReservation
     */
    public function setCxlReasonID($CxlReasonID)
    {
        $this->CxlReasonID = $CxlReasonID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCxlMessage()
    {
        return $this->CxlMessage;
    }

    /**
     * @param string $CxlMessage
     * @return \Gueststream\PMS\IQWare\API\CancelReservation
     */
    public function setCxlMessage($CxlMessage)
    {
        $this->CxlMessage = $CxlMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\CancelReservation
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }
}
