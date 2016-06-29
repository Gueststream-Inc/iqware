<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetAllMembers
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
     * @var boolean $HasWebLogin
     */
    protected $HasWebLogin = null;

    /**
     * @param int $guid
     * @param string $globalUsername
     * @param string $globalPassword
     * @param boolean $HasWebLogin
     */
    public function __construct($guid, $globalUsername, $globalPassword, $HasWebLogin)
    {
        $this->guid = $guid;
        $this->globalUsername = $globalUsername;
        $this->globalPassword = $globalPassword;
        $this->HasWebLogin = $HasWebLogin;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetAllMembers
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetAllMembers
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetAllMembers
     */
    public function setGlobalPassword($globalPassword)
    {
        $this->globalPassword = $globalPassword;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasWebLogin()
    {
        return $this->HasWebLogin;
    }

    /**
     * @param boolean $HasWebLogin
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetAllMembers
     */
    public function setHasWebLogin($HasWebLogin)
    {
        $this->HasWebLogin = $HasWebLogin;
        return $this;
    }
}
