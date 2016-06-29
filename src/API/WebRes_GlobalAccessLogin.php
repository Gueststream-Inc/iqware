<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GlobalAccessLogin
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var string $globalUsername
     */
    protected $globalUsername = null;

    /**
     * @var string $globalPassword
     */
    protected $globalPassword = null;

    /**
     * @var string $WebLogin
     */
    protected $WebLogin = null;

    /**
     * @param int $guid
     * @param string $globalUsername
     * @param string $globalPassword
     * @param string $WebLogin
     */
    public function __construct($guid, $globalUsername, $globalPassword, $WebLogin)
    {
        $this->guid = $guid;
        $this->globalUsername = $globalUsername;
        $this->globalPassword = $globalPassword;
        $this->WebLogin = $WebLogin;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\WebRes_GlobalAccessLogin
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getGlobalUsername()
    {
        return $this->globalUsername;
    }

    /**
     * @param string $globalUsername
     * @return \Gueststream\PMS\IQWare\API\WebRes_GlobalAccessLogin
     */
    public function setGlobalUsername($globalUsername)
    {
        $this->globalUsername = $globalUsername;
        return $this;
    }

    /**
     * @return string
     */
    public function getGlobalPassword()
    {
        return $this->globalPassword;
    }

    /**
     * @param string $globalPassword
     * @return \Gueststream\PMS\IQWare\API\WebRes_GlobalAccessLogin
     */
    public function setGlobalPassword($globalPassword)
    {
        $this->globalPassword = $globalPassword;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GlobalAccessLogin
     */
    public function setWebLogin($WebLogin)
    {
        $this->WebLogin = $WebLogin;
        return $this;
    }
}
