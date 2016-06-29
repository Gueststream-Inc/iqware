<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetAllMemberReservations
{

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $guid
     * @param string $userName
     * @param string $password
     */
    public function __construct($guid, $userName, $password)
    {
        $this->guid = $guid;
        $this->userName = $userName;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetAllMemberReservations
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetAllMemberReservations
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetAllMemberReservations
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
