<?php

namespace Gueststream\PMS\IQWare\API;

class Loyalty
{

    /**
     * @var int $ID_Member
     */
    protected $ID_Member = null;

    /**
     * @var string $GHClub_Name
     */
    protected $GHClub_Name = null;

    /**
     * @var string $GHClub_ShortName
     */
    protected $GHClub_ShortName = null;

    /**
     * @var boolean $GHClubLevel_IsActive
     */
    protected $GHClubLevel_IsActive = null;

    /**
     * @var string $GHClubLevel_Name
     */
    protected $GHClubLevel_Name = null;

    /**
     * @var string $GHClubLevel_Shortname
     */
    protected $GHClubLevel_Shortname = null;

    /**
     * @var boolean $GHClubLevel_IsVIP
     */
    protected $GHClubLevel_IsVIP = null;

    /**
     * @var int $ID_SpecialRequestGroup
     */
    protected $ID_SpecialRequestGroup = null;

    /**
     * @var int $ID_GHClub
     */
    protected $ID_GHClub = null;

    /**
     * @var int $GHClubLevel_ViewOrder
     */
    protected $GHClubLevel_ViewOrder = null;

    /**
     * @var int $MinPoint
     */
    protected $MinPoint = null;

    /**
     * @var int $ID_Reference
     */
    protected $ID_Reference = null;

    /**
     * @var int $GHClubLevel_ID_VIP
     */
    protected $GHClubLevel_ID_VIP = null;

    /**
     * @var int $ID_MemberClub
     */
    protected $ID_MemberClub = null;

    /**
     * @var boolean $MemberClub_IsActive
     */
    protected $MemberClub_IsActive = null;

    /**
     * @var int $ID_GHClubLevel
     */
    protected $ID_GHClubLevel = null;

    /**
     * @var string $MemberClub_CardNumber
     */
    protected $MemberClub_CardNumber = null;

    /**
     * @var boolean $MemberClub_IsDefault
     */
    protected $MemberClub_IsDefault = null;

    /**
     * @var int $PropertyGUID
     */
    protected $PropertyGUID = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var int $ID_MemberClubPoints
     */
    protected $ID_MemberClubPoints = null;

    /**
     * @var int $AccumTotal
     */
    protected $AccumTotal = null;

    /**
     * @var int $AccumYear
     */
    protected $AccumYear = null;

    /**
     * @var int $ExpenseTotal
     */
    protected $ExpenseTotal = null;

    /**
     * @var \DateTime $SysModifDate
     */
    protected $SysModifDate = null;

    /**
     * @param int $ID_Member
     * @param boolean $GHClubLevel_IsActive
     * @param boolean $GHClubLevel_IsVIP
     * @param int $ID_SpecialRequestGroup
     * @param int $ID_GHClub
     * @param int $GHClubLevel_ViewOrder
     * @param int $MinPoint
     * @param int $ID_Reference
     * @param int $GHClubLevel_ID_VIP
     * @param int $ID_MemberClub
     * @param boolean $MemberClub_IsActive
     * @param int $ID_GHClubLevel
     * @param boolean $MemberClub_IsDefault
     * @param int $PropertyGUID
     * @param \DateTime $CreationDate
     * @param int $ID_MemberClubPoints
     * @param int $AccumTotal
     * @param int $AccumYear
     * @param int $ExpenseTotal
     * @param \DateTime $SysModifDate
     */
    public function __construct($ID_Member, $GHClubLevel_IsActive, $GHClubLevel_IsVIP, $ID_SpecialRequestGroup, $ID_GHClub, $GHClubLevel_ViewOrder, $MinPoint, $ID_Reference, $GHClubLevel_ID_VIP, $ID_MemberClub, $MemberClub_IsActive, $ID_GHClubLevel, $MemberClub_IsDefault, $PropertyGUID, \DateTime $CreationDate, $ID_MemberClubPoints, $AccumTotal, $AccumYear, $ExpenseTotal, \DateTime $SysModifDate)
    {
        $this->ID_Member = $ID_Member;
        $this->GHClubLevel_IsActive = $GHClubLevel_IsActive;
        $this->GHClubLevel_IsVIP = $GHClubLevel_IsVIP;
        $this->ID_SpecialRequestGroup = $ID_SpecialRequestGroup;
        $this->ID_GHClub = $ID_GHClub;
        $this->GHClubLevel_ViewOrder = $GHClubLevel_ViewOrder;
        $this->MinPoint = $MinPoint;
        $this->ID_Reference = $ID_Reference;
        $this->GHClubLevel_ID_VIP = $GHClubLevel_ID_VIP;
        $this->ID_MemberClub = $ID_MemberClub;
        $this->MemberClub_IsActive = $MemberClub_IsActive;
        $this->ID_GHClubLevel = $ID_GHClubLevel;
        $this->MemberClub_IsDefault = $MemberClub_IsDefault;
        $this->PropertyGUID = $PropertyGUID;
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
        $this->ID_MemberClubPoints = $ID_MemberClubPoints;
        $this->AccumTotal = $AccumTotal;
        $this->AccumYear = $AccumYear;
        $this->ExpenseTotal = $ExpenseTotal;
        $this->SysModifDate = $SysModifDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setID_Member($ID_Member)
    {
        $this->ID_Member = $ID_Member;
        return $this;
    }

    /**
     * @return string
     */
    public function getGHClub_Name()
    {
        return $this->GHClub_Name;
    }

    /**
     * @param string $GHClub_Name
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setGHClub_Name($GHClub_Name)
    {
        $this->GHClub_Name = $GHClub_Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getGHClub_ShortName()
    {
        return $this->GHClub_ShortName;
    }

    /**
     * @param string $GHClub_ShortName
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setGHClub_ShortName($GHClub_ShortName)
    {
        $this->GHClub_ShortName = $GHClub_ShortName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getGHClubLevel_IsActive()
    {
        return $this->GHClubLevel_IsActive;
    }

    /**
     * @param boolean $GHClubLevel_IsActive
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setGHClubLevel_IsActive($GHClubLevel_IsActive)
    {
        $this->GHClubLevel_IsActive = $GHClubLevel_IsActive;
        return $this;
    }

    /**
     * @return string
     */
    public function getGHClubLevel_Name()
    {
        return $this->GHClubLevel_Name;
    }

    /**
     * @param string $GHClubLevel_Name
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setGHClubLevel_Name($GHClubLevel_Name)
    {
        $this->GHClubLevel_Name = $GHClubLevel_Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getGHClubLevel_Shortname()
    {
        return $this->GHClubLevel_Shortname;
    }

    /**
     * @param string $GHClubLevel_Shortname
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setGHClubLevel_Shortname($GHClubLevel_Shortname)
    {
        $this->GHClubLevel_Shortname = $GHClubLevel_Shortname;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getGHClubLevel_IsVIP()
    {
        return $this->GHClubLevel_IsVIP;
    }

    /**
     * @param boolean $GHClubLevel_IsVIP
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setGHClubLevel_IsVIP($GHClubLevel_IsVIP)
    {
        $this->GHClubLevel_IsVIP = $GHClubLevel_IsVIP;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SpecialRequestGroup()
    {
        return $this->ID_SpecialRequestGroup;
    }

    /**
     * @param int $ID_SpecialRequestGroup
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setID_SpecialRequestGroup($ID_SpecialRequestGroup)
    {
        $this->ID_SpecialRequestGroup = $ID_SpecialRequestGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_GHClub()
    {
        return $this->ID_GHClub;
    }

    /**
     * @param int $ID_GHClub
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setID_GHClub($ID_GHClub)
    {
        $this->ID_GHClub = $ID_GHClub;
        return $this;
    }

    /**
     * @return int
     */
    public function getGHClubLevel_ViewOrder()
    {
        return $this->GHClubLevel_ViewOrder;
    }

    /**
     * @param int $GHClubLevel_ViewOrder
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setGHClubLevel_ViewOrder($GHClubLevel_ViewOrder)
    {
        $this->GHClubLevel_ViewOrder = $GHClubLevel_ViewOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinPoint()
    {
        return $this->MinPoint;
    }

    /**
     * @param int $MinPoint
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setMinPoint($MinPoint)
    {
        $this->MinPoint = $MinPoint;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Reference()
    {
        return $this->ID_Reference;
    }

    /**
     * @param int $ID_Reference
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setID_Reference($ID_Reference)
    {
        $this->ID_Reference = $ID_Reference;
        return $this;
    }

    /**
     * @return int
     */
    public function getGHClubLevel_ID_VIP()
    {
        return $this->GHClubLevel_ID_VIP;
    }

    /**
     * @param int $GHClubLevel_ID_VIP
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setGHClubLevel_ID_VIP($GHClubLevel_ID_VIP)
    {
        $this->GHClubLevel_ID_VIP = $GHClubLevel_ID_VIP;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_MemberClub()
    {
        return $this->ID_MemberClub;
    }

    /**
     * @param int $ID_MemberClub
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setID_MemberClub($ID_MemberClub)
    {
        $this->ID_MemberClub = $ID_MemberClub;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMemberClub_IsActive()
    {
        return $this->MemberClub_IsActive;
    }

    /**
     * @param boolean $MemberClub_IsActive
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setMemberClub_IsActive($MemberClub_IsActive)
    {
        $this->MemberClub_IsActive = $MemberClub_IsActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_GHClubLevel()
    {
        return $this->ID_GHClubLevel;
    }

    /**
     * @param int $ID_GHClubLevel
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setID_GHClubLevel($ID_GHClubLevel)
    {
        $this->ID_GHClubLevel = $ID_GHClubLevel;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberClub_CardNumber()
    {
        return $this->MemberClub_CardNumber;
    }

    /**
     * @param string $MemberClub_CardNumber
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setMemberClub_CardNumber($MemberClub_CardNumber)
    {
        $this->MemberClub_CardNumber = $MemberClub_CardNumber;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMemberClub_IsDefault()
    {
        return $this->MemberClub_IsDefault;
    }

    /**
     * @param boolean $MemberClub_IsDefault
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setMemberClub_IsDefault($MemberClub_IsDefault)
    {
        $this->MemberClub_IsDefault = $MemberClub_IsDefault;
        return $this;
    }

    /**
     * @return int
     */
    public function getPropertyGUID()
    {
        return $this->PropertyGUID;
    }

    /**
     * @param int $PropertyGUID
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setPropertyGUID($PropertyGUID)
    {
        $this->PropertyGUID = $PropertyGUID;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        if ($this->CreationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CreationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
        $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getID_MemberClubPoints()
    {
        return $this->ID_MemberClubPoints;
    }

    /**
     * @param int $ID_MemberClubPoints
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setID_MemberClubPoints($ID_MemberClubPoints)
    {
        $this->ID_MemberClubPoints = $ID_MemberClubPoints;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccumTotal()
    {
        return $this->AccumTotal;
    }

    /**
     * @param int $AccumTotal
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setAccumTotal($AccumTotal)
    {
        $this->AccumTotal = $AccumTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccumYear()
    {
        return $this->AccumYear;
    }

    /**
     * @param int $AccumYear
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setAccumYear($AccumYear)
    {
        $this->AccumYear = $AccumYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpenseTotal()
    {
        return $this->ExpenseTotal;
    }

    /**
     * @param int $ExpenseTotal
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setExpenseTotal($ExpenseTotal)
    {
        $this->ExpenseTotal = $ExpenseTotal;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSysModifDate()
    {
        if ($this->SysModifDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SysModifDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SysModifDate
     * @return \Gueststream\PMS\IQWare\API\Loyalty
     */
    public function setSysModifDate(\DateTime $SysModifDate)
    {
        $this->SysModifDate = $SysModifDate->format(\DateTime::ATOM);
        return $this;
    }
}
