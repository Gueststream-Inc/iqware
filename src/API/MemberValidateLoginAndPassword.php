<?php

namespace Gueststream\PMS\IQWare\API;

class MemberValidateLoginAndPassword
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param int $GUID
     * @param string $userName
     * @param string $password
     */
    public function __construct($GUID, $userName, $password)
    {
        $this->GUID = $GUID;
        $this->userName = $userName;
        $this->password = $password;
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
     * @return \Gueststream\PMS\IQWare\API\MemberValidateLoginAndPassword
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
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
     * @return \Gueststream\PMS\IQWare\API\MemberValidateLoginAndPassword
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
     * @return \Gueststream\PMS\IQWare\API\MemberValidateLoginAndPassword
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
