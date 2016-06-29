<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_updateAccountInfos
{

    /**
     * @var dstAccInfos $dstAccInfos
     */
    protected $dstAccInfos = null;

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
     * @param dstAccInfos $dstAccInfos
     * @param int $intGUID
     * @param int $intAccNo
     * @param string $strPassword
     */
    public function __construct($dstAccInfos, $intGUID, $intAccNo, $strPassword)
    {
        $this->dstAccInfos = $dstAccInfos;
        $this->intGUID = $intGUID;
        $this->intAccNo = $intAccNo;
        $this->strPassword = $strPassword;
    }

    /**
     * @return dstAccInfos
     */
    public function getDstAccInfos()
    {
        return $this->dstAccInfos;
    }

    /**
     * @param dstAccInfos $dstAccInfos
     * @return \Gueststream\PMS\IQWare\API\WebRes_updateAccountInfos
     */
    public function setDstAccInfos($dstAccInfos)
    {
        $this->dstAccInfos = $dstAccInfos;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_updateAccountInfos
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_updateAccountInfos
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_updateAccountInfos
     */
    public function setStrPassword($strPassword)
    {
        $this->strPassword = $strPassword;
        return $this;
    }
}
