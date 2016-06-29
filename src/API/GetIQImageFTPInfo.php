<?php

namespace Gueststream\PMS\IQWare\API;

class GetIQImageFTPInfo
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param int $Guid
     * @param string $login
     * @param string $password
     */
    public function __construct($Guid, $login, $password)
    {
        $this->Guid = $Guid;
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->Guid;
    }

    /**
     * @param int $Guid
     * @return \Gueststream\PMS\IQWare\API\GetIQImageFTPInfo
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
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
     * @return \Gueststream\PMS\IQWare\API\GetIQImageFTPInfo
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
     * @return \Gueststream\PMS\IQWare\API\GetIQImageFTPInfo
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
