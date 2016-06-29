<?php

namespace Gueststream\PMS\IQWare\API;

class BeginChangePassword
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
     * @param int $GUID
     * @param string $WebLogin
     * @param string $EMail
     */
    public function __construct($GUID, $WebLogin, $EMail)
    {
        $this->GUID = $GUID;
        $this->WebLogin = $WebLogin;
        $this->EMail = $EMail;
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
     * @return \Gueststream\PMS\IQWare\API\BeginChangePassword
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
     * @return \Gueststream\PMS\IQWare\API\BeginChangePassword
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
     * @return \Gueststream\PMS\IQWare\API\BeginChangePassword
     */
    public function setEMail($EMail)
    {
        $this->EMail = $EMail;
        return $this;
    }
}
