<?php

namespace Gueststream\PMS\IQWare\API;

class MemberGet
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $WebLogin
     */
    protected $WebLogin = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param int $GUID
     * @param int $AccountNo
     * @param string $WebLogin
     * @param string $Password
     */
    public function __construct($GUID, $AccountNo, $WebLogin, $Password)
    {
        $this->GUID = $GUID;
        $this->AccountNo = $AccountNo;
        $this->WebLogin = $WebLogin;
        $this->Password = $Password;
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
     * @return \Gueststream\PMS\IQWare\API\MemberGet
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
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
     * @return \Gueststream\PMS\IQWare\API\MemberGet
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\MemberGet
     */
    public function setWebLogin($WebLogin)
    {
        $this->WebLogin = $WebLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Gueststream\PMS\IQWare\API\MemberGet
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }
}
