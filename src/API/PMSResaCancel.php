<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaCancel
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var int $ID_CxlReason
     */
    protected $ID_CxlReason = null;

    /**
     * @var string $CxlMessage
     */
    protected $CxlMessage = null;

    /**
     * @param int $AccountNo
     * @param int $ID_CxlReason
     * @param string $CxlMessage
     */
    public function __construct($AccountNo, $ID_CxlReason, $CxlMessage)
    {
        $this->AccountNo = $AccountNo;
        $this->ID_CxlReason = $ID_CxlReason;
        $this->CxlMessage = $CxlMessage;
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
     * @return \Gueststream\PMS\IQWare\API\PMSResaCancel
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CxlReason()
    {
        return $this->ID_CxlReason;
    }

    /**
     * @param int $ID_CxlReason
     * @return \Gueststream\PMS\IQWare\API\PMSResaCancel
     */
    public function setID_CxlReason($ID_CxlReason)
    {
        $this->ID_CxlReason = $ID_CxlReason;
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
     * @return \Gueststream\PMS\IQWare\API\PMSResaCancel
     */
    public function setCxlMessage($CxlMessage)
    {
        $this->CxlMessage = $CxlMessage;
        return $this;
    }
}
