<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubMemberGet
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var int $MemberNo
     */
    protected $MemberNo = null;

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
     * @param int $MemberNo
     * @param string $WebLogin
     * @param string $Password
     */
    public function __construct($GUID, $MemberNo, $WebLogin, $Password)
    {
        $this->GUID = $GUID;
        $this->MemberNo = $MemberNo;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberGet
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemberNo()
    {
        return $this->MemberNo;
    }

    /**
     * @param int $MemberNo
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberGet
     */
    public function setMemberNo($MemberNo)
    {
        $this->MemberNo = $MemberNo;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberGet
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberGet
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }
}
