<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerBasicInfos
{

    /**
     * @var int $guid
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
     * @param int $guid
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
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerBasicInfos
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerBasicInfos
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerBasicInfos
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
