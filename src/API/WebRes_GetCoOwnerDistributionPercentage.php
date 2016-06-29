<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCoOwnerDistributionPercentage
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var int $ID_Admin
     */
    protected $ID_Admin = null;

    /**
     * @var int $ID_Member
     */
    protected $ID_Member = null;

    /**
     * @param int $GUID
     * @param int $ID_CondoOwner
     * @param int $ID_Admin
     * @param int $ID_Member
     */
    public function __construct($GUID, $ID_CondoOwner, $ID_Admin, $ID_Member)
    {
        $this->GUID = $GUID;
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->ID_Admin = $ID_Admin;
        $this->ID_Member = $ID_Member;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCoOwnerDistributionPercentage
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCoOwnerDistributionPercentage
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Admin()
    {
        return $this->ID_Admin;
    }

    /**
     * @param int $ID_Admin
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCoOwnerDistributionPercentage
     */
    public function setID_Admin($ID_Admin)
    {
        $this->ID_Admin = $ID_Admin;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Member()
    {
        return $this->ID_Member;
    }

    /**
     * @param int $ID_Member
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCoOwnerDistributionPercentage
     */
    public function setID_Member($ID_Member)
    {
        $this->ID_Member = $ID_Member;
        return $this;
    }
}
