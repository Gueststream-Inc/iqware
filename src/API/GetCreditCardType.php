<?php

namespace Gueststream\PMS\IQWare\API;

class GetCreditCardType
{

    /**
     * @var string $CardNo
     */
    protected $CardNo = null;

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @param string $CardNo
     * @param int $GUID
     */
    public function __construct($CardNo, $GUID)
    {
        $this->CardNo = $CardNo;
        $this->GUID = $GUID;
    }

    /**
     * @return string
     */
    public function getCardNo()
    {
        return $this->CardNo;
    }

    /**
     * @param string $CardNo
     * @return \Gueststream\PMS\IQWare\API\GetCreditCardType
     */
    public function setCardNo($CardNo)
    {
        $this->CardNo = $CardNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $GUID
     * @return \Gueststream\PMS\IQWare\API\GetCreditCardType
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }
}
