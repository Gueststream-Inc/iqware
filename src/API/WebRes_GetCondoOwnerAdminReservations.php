<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerAdminReservations
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
     * @var int $AdminID
     */
    protected $AdminID = null;

    /**
     * @var int $MemberID
     */
    protected $MemberID = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @param int $guid
     * @param string $userName
     * @param string $password
     * @param int $AdminID
     * @param int $MemberID
     * @param int $ID_CondoOwner
     */
    public function __construct($guid, $userName, $password, $AdminID, $MemberID, $ID_CondoOwner)
    {
        $this->guid = $guid;
        $this->userName = $userName;
        $this->password = $password;
        $this->AdminID = $AdminID;
        $this->MemberID = $MemberID;
        $this->ID_CondoOwner = $ID_CondoOwner;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerAdminReservations
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerAdminReservations
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerAdminReservations
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdminID()
    {
        return $this->AdminID;
    }

    /**
     * @param int $AdminID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerAdminReservations
     */
    public function setAdminID($AdminID)
    {
        $this->AdminID = $AdminID;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemberID()
    {
        return $this->MemberID;
    }

    /**
     * @param int $MemberID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerAdminReservations
     */
    public function setMemberID($MemberID)
    {
        $this->MemberID = $MemberID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerAdminReservations
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }
}
