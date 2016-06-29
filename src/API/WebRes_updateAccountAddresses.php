<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_updateAccountAddresses
{

    /**
     * @var dstAddresses $dstAddresses
     */
    protected $dstAddresses = null;

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
     * @param dstAddresses $dstAddresses
     * @param int $intGUID
     * @param int $intAccNo
     * @param string $strPassword
     */
    public function __construct($dstAddresses, $intGUID, $intAccNo, $strPassword)
    {
        $this->dstAddresses = $dstAddresses;
        $this->intGUID = $intGUID;
        $this->intAccNo = $intAccNo;
        $this->strPassword = $strPassword;
    }

    /**
     * @return dstAddresses
     */
    public function getDstAddresses()
    {
        return $this->dstAddresses;
    }

    /**
     * @param dstAddresses $dstAddresses
     * @return \Gueststream\PMS\IQWare\API\WebRes_updateAccountAddresses
     */
    public function setDstAddresses($dstAddresses)
    {
        $this->dstAddresses = $dstAddresses;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_updateAccountAddresses
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_updateAccountAddresses
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_updateAccountAddresses
     */
    public function setStrPassword($strPassword)
    {
        $this->strPassword = $strPassword;
        return $this;
    }
}
