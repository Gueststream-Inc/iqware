<?php

namespace Gueststream\PMS\IQWare\API;

class MemberModify
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var cMember $MemberInfos
     */
    protected $MemberInfos = null;

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
     * @param cMember $MemberInfos
     * @param string $WebLogin
     * @param string $Password
     */
    public function __construct($GUID, $MemberInfos, $WebLogin, $Password)
    {
        $this->GUID = $GUID;
        $this->MemberInfos = $MemberInfos;
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
     * @return \Gueststream\PMS\IQWare\API\MemberModify
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return cMember
     */
    public function getMemberInfos()
    {
        return $this->MemberInfos;
    }

    /**
     * @param cMember $MemberInfos
     * @return \Gueststream\PMS\IQWare\API\MemberModify
     */
    public function setMemberInfos($MemberInfos)
    {
        $this->MemberInfos = $MemberInfos;
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
     * @return \Gueststream\PMS\IQWare\API\MemberModify
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
     * @return \Gueststream\PMS\IQWare\API\MemberModify
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }
}
