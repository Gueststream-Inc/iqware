<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_UpdateOwnerAddresses
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $XMLOwnerAddresses
     */
    protected $XMLOwnerAddresses = null;

    /**
     * @param int $guid
     * @param string $login
     * @param string $password
     * @param string $XMLOwnerAddresses
     */
    public function __construct($guid, $login, $password, $XMLOwnerAddresses)
    {
        $this->guid = $guid;
        $this->login = $login;
        $this->password = $password;
        $this->XMLOwnerAddresses = $XMLOwnerAddresses;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateOwnerAddresses
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateOwnerAddresses
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateOwnerAddresses
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getXMLOwnerAddresses()
    {
        return $this->XMLOwnerAddresses;
    }

    /**
     * @param string $XMLOwnerAddresses
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateOwnerAddresses
     */
    public function setXMLOwnerAddresses($XMLOwnerAddresses)
    {
        $this->XMLOwnerAddresses = $XMLOwnerAddresses;
        return $this;
    }
}
