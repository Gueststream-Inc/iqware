<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetTravelAgent
{

    /**
     * @var int $iGUID
     */
    protected $iGUID = null;

    /**
     * @var string $strUserName
     */
    protected $strUserName = null;

    /**
     * @var string $strPassword
     */
    protected $strPassword = null;

    /**
     * @param int $iGUID
     * @param string $strUserName
     * @param string $strPassword
     */
    public function __construct($iGUID, $strUserName, $strPassword)
    {
        $this->iGUID = $iGUID;
        $this->strUserName = $strUserName;
        $this->strPassword = $strPassword;
    }

    /**
     * @return int
     */
    public function getIGUID()
    {
        return $this->iGUID;
    }

    /**
     * @param int $iGUID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetTravelAgent
     */
    public function setIGUID($iGUID)
    {
        $this->iGUID = $iGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrUserName()
    {
        return $this->strUserName;
    }

    /**
     * @param string $strUserName
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetTravelAgent
     */
    public function setStrUserName($strUserName)
    {
        $this->strUserName = $strUserName;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetTravelAgent
     */
    public function setStrPassword($strPassword)
    {
        $this->strPassword = $strPassword;
        return $this;
    }
}
