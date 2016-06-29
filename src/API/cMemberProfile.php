<?php

namespace Gueststream\PMS\IQWare\API;

class cMemberProfile
{

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var int $ID_CompanyGroupingType
     */
    protected $ID_CompanyGroupingType = null;

    /**
     * @var string $MemberID
     */
    protected $MemberID = null;

    /**
     * @param boolean $IsActive
     * @param int $ID_CompanyGroupingType
     */
    public function __construct($IsActive, $ID_CompanyGroupingType)
    {
        $this->IsActive = $IsActive;
        $this->ID_CompanyGroupingType = $ID_CompanyGroupingType;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param string $Note
     * @return \Gueststream\PMS\IQWare\API\cMemberProfile
     */
    public function setNote($Note)
    {
        $this->Note = $Note;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return \Gueststream\PMS\IQWare\API\cMemberProfile
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CompanyGroupingType()
    {
        return $this->ID_CompanyGroupingType;
    }

    /**
     * @param int $ID_CompanyGroupingType
     * @return \Gueststream\PMS\IQWare\API\cMemberProfile
     */
    public function setID_CompanyGroupingType($ID_CompanyGroupingType)
    {
        $this->ID_CompanyGroupingType = $ID_CompanyGroupingType;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberID()
    {
        return $this->MemberID;
    }

    /**
     * @param string $MemberID
     * @return \Gueststream\PMS\IQWare\API\cMemberProfile
     */
    public function setMemberID($MemberID)
    {
        $this->MemberID = $MemberID;
        return $this;
    }
}
