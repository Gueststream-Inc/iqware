<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_UpdateTAAddress
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
     * @var dsTA $dsTA
     */
    protected $dsTA = null;

    /**
     * @param int $iGUID
     * @param string $strUserName
     * @param string $strPassword
     * @param dsTA $dsTA
     */
    public function __construct($iGUID, $strUserName, $strPassword, $dsTA)
    {
        $this->iGUID = $iGUID;
        $this->strUserName = $strUserName;
        $this->strPassword = $strPassword;
        $this->dsTA = $dsTA;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateTAAddress
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateTAAddress
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateTAAddress
     */
    public function setStrPassword($strPassword)
    {
        $this->strPassword = $strPassword;
        return $this;
    }

    /**
     * @return dsTA
     */
    public function getDsTA()
    {
        return $this->dsTA;
    }

    /**
     * @param dsTA $dsTA
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateTAAddress
     */
    public function setDsTA($dsTA)
    {
        $this->dsTA = $dsTA;
        return $this;
    }
}
