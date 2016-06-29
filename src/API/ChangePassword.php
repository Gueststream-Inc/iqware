<?php

namespace Gueststream\PMS\IQWare\API;

class ChangePassword
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var string $WebLogin
     */
    protected $WebLogin = null;

    /**
     * @var string $EMail
     */
    protected $EMail = null;

    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    /**
     * @param int $GUID
     * @param string $WebLogin
     * @param string $EMail
     * @param string $newPassword
     */
    public function __construct($GUID, $WebLogin, $EMail, $newPassword)
    {
        $this->GUID = $GUID;
        $this->WebLogin = $WebLogin;
        $this->EMail = $EMail;
        $this->newPassword = $newPassword;
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
     * @return \Gueststream\PMS\IQWare\API\ChangePassword
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebLogin()
    {
        return $this->WebLogin;
    }

    /**
     * @param string $WebLogin
     * @return \Gueststream\PMS\IQWare\API\ChangePassword
     */
    public function setWebLogin($WebLogin)
    {
        $this->WebLogin = $WebLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
        return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return \Gueststream\PMS\IQWare\API\ChangePassword
     */
    public function setEMail($EMail)
    {
        $this->EMail = $EMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \Gueststream\PMS\IQWare\API\ChangePassword
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }
}
