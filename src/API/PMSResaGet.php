<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaGet
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @param int $GUID
     * @param int $AccountNo
     */
    public function __construct($GUID, $AccountNo)
    {
        $this->GUID = $GUID;
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\PMSResaGet
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\PMSResaGet
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }
}
