<?php

namespace Gueststream\PMS\IQWare\API;

class MemberValidateLoginAndPasswordResponse
{

    /**
     * @var int $MemberValidateLoginAndPasswordResult
     */
    protected $MemberValidateLoginAndPasswordResult = null;

    /**
     * @param int $MemberValidateLoginAndPasswordResult
     */
    public function __construct($MemberValidateLoginAndPasswordResult)
    {
        $this->MemberValidateLoginAndPasswordResult = $MemberValidateLoginAndPasswordResult;
    }

    /**
     * @return int
     */
    public function getMemberValidateLoginAndPasswordResult()
    {
        return $this->MemberValidateLoginAndPasswordResult;
    }

    /**
     * @param int $MemberValidateLoginAndPasswordResult
     * @return \Gueststream\PMS\IQWare\API\MemberValidateLoginAndPasswordResponse
     */
    public function setMemberValidateLoginAndPasswordResult($MemberValidateLoginAndPasswordResult)
    {
        $this->MemberValidateLoginAndPasswordResult = $MemberValidateLoginAndPasswordResult;
        return $this;
    }
}
