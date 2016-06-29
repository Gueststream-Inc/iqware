<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_UpdateAccountLogin
{

    /**
     * @var int $iGUID
     */
    protected $iGUID = null;

    /**
     * @var string $strOldLogin
     */
    protected $strOldLogin = null;

    /**
     * @var string $strNewLogin
     */
    protected $strNewLogin = null;

    /**
     * @var string $strOldPassword
     */
    protected $strOldPassword = null;

    /**
     * @var string $strNewPassword
     */
    protected $strNewPassword = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @param int $iGUID
     * @param string $strOldLogin
     * @param string $strNewLogin
     * @param string $strOldPassword
     * @param string $strNewPassword
     * @param int $AccountNo
     */
    public function __construct($iGUID, $strOldLogin, $strNewLogin, $strOldPassword, $strNewPassword, $AccountNo)
    {
        $this->iGUID = $iGUID;
        $this->strOldLogin = $strOldLogin;
        $this->strNewLogin = $strNewLogin;
        $this->strOldPassword = $strOldPassword;
        $this->strNewPassword = $strNewPassword;
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateAccountLogin
     */
    public function setIGUID($iGUID)
    {
        $this->iGUID = $iGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrOldLogin()
    {
        return $this->strOldLogin;
    }

    /**
     * @param string $strOldLogin
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateAccountLogin
     */
    public function setStrOldLogin($strOldLogin)
    {
        $this->strOldLogin = $strOldLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrNewLogin()
    {
        return $this->strNewLogin;
    }

    /**
     * @param string $strNewLogin
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateAccountLogin
     */
    public function setStrNewLogin($strNewLogin)
    {
        $this->strNewLogin = $strNewLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrOldPassword()
    {
        return $this->strOldPassword;
    }

    /**
     * @param string $strOldPassword
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateAccountLogin
     */
    public function setStrOldPassword($strOldPassword)
    {
        $this->strOldPassword = $strOldPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrNewPassword()
    {
        return $this->strNewPassword;
    }

    /**
     * @param string $strNewPassword
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateAccountLogin
     */
    public function setStrNewPassword($strNewPassword)
    {
        $this->strNewPassword = $strNewPassword;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateAccountLogin
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }
}
