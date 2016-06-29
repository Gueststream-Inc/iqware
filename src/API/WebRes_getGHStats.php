<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getGHStats
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $intAccNo
     */
    protected $intAccNo = null;

    /**
     * @var string $strPassword
     */
    protected $strPassword = null;

    /**
     * @param int $intGUID
     * @param int $intAccNo
     * @param string $strPassword
     */
    public function __construct($intGUID, $intAccNo, $strPassword)
    {
        $this->intGUID = $intGUID;
        $this->intAccNo = $intAccNo;
        $this->strPassword = $strPassword;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_getGHStats
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntAccNo()
    {
        return $this->intAccNo;
    }

    /**
     * @param int $intAccNo
     * @return \Gueststream\PMS\IQWare\API\WebRes_getGHStats
     */
    public function setIntAccNo($intAccNo)
    {
        $this->intAccNo = $intAccNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrPassword()
    {
        return $this->strPassword;
    }

    /**
     * @param string $strPassword
     * @return \Gueststream\PMS\IQWare\API\WebRes_getGHStats
     */
    public function setStrPassword($strPassword)
    {
        $this->strPassword = $strPassword;
        return $this;
    }
}
