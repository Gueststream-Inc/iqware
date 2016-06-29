<?php

namespace Gueststream\PMS\IQWare\API;

class GroupValues extends InfoMessage
{

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $GuestMax
     */
    protected $GuestMax = null;

    /**
     * @var string $RoomTypeName
     */
    protected $RoomTypeName = null;

    /**
     * @var string $GroupName
     */
    protected $GroupName = null;

    /**
     * @var string $GrpID
     */
    protected $GrpID = null;

    /**
     * @var int $ID_Group
     */
    protected $ID_Group = null;

    /**
     * @var int $ID_PrivateGrid
     */
    protected $ID_PrivateGrid = null;

    /**
     * @var int $ID_RateCodeTmpl
     */
    protected $ID_RateCodeTmpl = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var boolean $IsPriceFromPrivateGrid
     */
    protected $IsPriceFromPrivateGrid = null;

    /**
     * @var string $SingleOcc
     */
    protected $SingleOcc = null;

    /**
     * @var string $DoubleOcc
     */
    protected $DoubleOcc = null;

    /**
     * @var string $TripleOcc
     */
    protected $TripleOcc = null;

    /**
     * @var string $QuadOcc
     */
    protected $QuadOcc = null;

    /**
     * @var string $Additional
     */
    protected $Additional = null;

    /**
     * @var string $Cat1
     */
    protected $Cat1 = null;

    /**
     * @var string $Cat2
     */
    protected $Cat2 = null;

    /**
     * @var string $Cat3
     */
    protected $Cat3 = null;

    /**
     * @var string $Cat4
     */
    protected $Cat4 = null;

    /**
     * @var float $FirstNight
     */
    protected $FirstNight = null;

    /**
     * @var float $TotalStay
     */
    protected $TotalStay = null;

    /**
     * @var float $AvgNight
     */
    protected $AvgNight = null;

    /**
     * @var float $FirstNightNoTaxes
     */
    protected $FirstNightNoTaxes = null;

    /**
     * @var float $TotalStayNoTaxes
     */
    protected $TotalStayNoTaxes = null;

    /**
     * @var float $RequiredDeposit
     */
    protected $RequiredDeposit = null;

    /**
     * @var ArrayOfSpecificDayOccupancyValue $SpecificDaysOccValue
     */
    protected $SpecificDaysOccValue = null;

    /**
     * @var ArrayOfRatesDetails $groupRates
     */
    protected $groupRates = null;

    /**
     * @var ArrayOfDetails $UnitsAvailable
     */
    protected $UnitsAvailable = null;

    /**
     * @var boolean $HasValues
     */
    protected $HasValues = null;

    /**
     * @param int $ID_RoomType
     * @param int $GuestMax
     * @param int $ID_Group
     * @param int $ID_PrivateGrid
     * @param int $ID_RateCodeTmpl
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param boolean $IsPriceFromPrivateGrid
     * @param float $FirstNight
     * @param float $TotalStay
     * @param float $AvgNight
     * @param float $FirstNightNoTaxes
     * @param float $TotalStayNoTaxes
     * @param float $RequiredDeposit
     * @param boolean $HasValues
     */
    public function __construct($ID_RoomType, $GuestMax, $ID_Group, $ID_PrivateGrid, $ID_RateCodeTmpl, \DateTime $StartDate, \DateTime $EndDate, $IsPriceFromPrivateGrid, $FirstNight, $TotalStay, $AvgNight, $FirstNightNoTaxes, $TotalStayNoTaxes, $RequiredDeposit, $HasValues)
    {
        parent::__construct();
        $this->ID_RoomType = $ID_RoomType;
        $this->GuestMax = $GuestMax;
        $this->ID_Group = $ID_Group;
        $this->ID_PrivateGrid = $ID_PrivateGrid;
        $this->ID_RateCodeTmpl = $ID_RateCodeTmpl;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->IsPriceFromPrivateGrid = $IsPriceFromPrivateGrid;
        $this->FirstNight = $FirstNight;
        $this->TotalStay = $TotalStay;
        $this->AvgNight = $AvgNight;
        $this->FirstNightNoTaxes = $FirstNightNoTaxes;
        $this->TotalStayNoTaxes = $TotalStayNoTaxes;
        $this->RequiredDeposit = $RequiredDeposit;
        $this->HasValues = $HasValues;
    }

    /**
     * @return int
     */
    public function getID_RoomType()
    {
        return $this->ID_RoomType;
    }

    /**
     * @param int $ID_RoomType
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getGuestMax()
    {
        return $this->GuestMax;
    }

    /**
     * @param int $GuestMax
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setGuestMax($GuestMax)
    {
        $this->GuestMax = $GuestMax;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
        return $this->RoomTypeName;
    }

    /**
     * @param string $RoomTypeName
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setRoomTypeName($RoomTypeName)
    {
        $this->RoomTypeName = $RoomTypeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->GroupName;
    }

    /**
     * @param string $GroupName
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setGroupName($GroupName)
    {
        $this->GroupName = $GroupName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrpID()
    {
        return $this->GrpID;
    }

    /**
     * @param string $GrpID
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setGrpID($GrpID)
    {
        $this->GrpID = $GrpID;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Group()
    {
        return $this->ID_Group;
    }

    /**
     * @param int $ID_Group
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setID_Group($ID_Group)
    {
        $this->ID_Group = $ID_Group;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_PrivateGrid()
    {
        return $this->ID_PrivateGrid;
    }

    /**
     * @param int $ID_PrivateGrid
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setID_PrivateGrid($ID_PrivateGrid)
    {
        $this->ID_PrivateGrid = $ID_PrivateGrid;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCodeTmpl()
    {
        return $this->ID_RateCodeTmpl;
    }

    /**
     * @param int $ID_RateCodeTmpl
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setID_RateCodeTmpl($ID_RateCodeTmpl)
    {
        $this->ID_RateCodeTmpl = $ID_RateCodeTmpl;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPriceFromPrivateGrid()
    {
        return $this->IsPriceFromPrivateGrid;
    }

    /**
     * @param boolean $IsPriceFromPrivateGrid
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setIsPriceFromPrivateGrid($IsPriceFromPrivateGrid)
    {
        $this->IsPriceFromPrivateGrid = $IsPriceFromPrivateGrid;
        return $this;
    }

    /**
     * @return string
     */
    public function getSingleOcc()
    {
        return $this->SingleOcc;
    }

    /**
     * @param string $SingleOcc
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setSingleOcc($SingleOcc)
    {
        $this->SingleOcc = $SingleOcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoubleOcc()
    {
        return $this->DoubleOcc;
    }

    /**
     * @param string $DoubleOcc
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setDoubleOcc($DoubleOcc)
    {
        $this->DoubleOcc = $DoubleOcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getTripleOcc()
    {
        return $this->TripleOcc;
    }

    /**
     * @param string $TripleOcc
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setTripleOcc($TripleOcc)
    {
        $this->TripleOcc = $TripleOcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuadOcc()
    {
        return $this->QuadOcc;
    }

    /**
     * @param string $QuadOcc
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setQuadOcc($QuadOcc)
    {
        $this->QuadOcc = $QuadOcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditional()
    {
        return $this->Additional;
    }

    /**
     * @param string $Additional
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setAdditional($Additional)
    {
        $this->Additional = $Additional;
        return $this;
    }

    /**
     * @return string
     */
    public function getCat1()
    {
        return $this->Cat1;
    }

    /**
     * @param string $Cat1
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setCat1($Cat1)
    {
        $this->Cat1 = $Cat1;
        return $this;
    }

    /**
     * @return string
     */
    public function getCat2()
    {
        return $this->Cat2;
    }

    /**
     * @param string $Cat2
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setCat2($Cat2)
    {
        $this->Cat2 = $Cat2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCat3()
    {
        return $this->Cat3;
    }

    /**
     * @param string $Cat3
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setCat3($Cat3)
    {
        $this->Cat3 = $Cat3;
        return $this;
    }

    /**
     * @return string
     */
    public function getCat4()
    {
        return $this->Cat4;
    }

    /**
     * @param string $Cat4
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setCat4($Cat4)
    {
        $this->Cat4 = $Cat4;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNight()
    {
        return $this->FirstNight;
    }

    /**
     * @param float $FirstNight
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setFirstNight($FirstNight)
    {
        $this->FirstNight = $FirstNight;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalStay()
    {
        return $this->TotalStay;
    }

    /**
     * @param float $TotalStay
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setTotalStay($TotalStay)
    {
        $this->TotalStay = $TotalStay;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgNight()
    {
        return $this->AvgNight;
    }

    /**
     * @param float $AvgNight
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setAvgNight($AvgNight)
    {
        $this->AvgNight = $AvgNight;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstNightNoTaxes()
    {
        return $this->FirstNightNoTaxes;
    }

    /**
     * @param float $FirstNightNoTaxes
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setFirstNightNoTaxes($FirstNightNoTaxes)
    {
        $this->FirstNightNoTaxes = $FirstNightNoTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalStayNoTaxes()
    {
        return $this->TotalStayNoTaxes;
    }

    /**
     * @param float $TotalStayNoTaxes
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setTotalStayNoTaxes($TotalStayNoTaxes)
    {
        $this->TotalStayNoTaxes = $TotalStayNoTaxes;
        return $this;
    }

    /**
     * @return float
     */
    public function getRequiredDeposit()
    {
        return $this->RequiredDeposit;
    }

    /**
     * @param float $RequiredDeposit
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setRequiredDeposit($RequiredDeposit)
    {
        $this->RequiredDeposit = $RequiredDeposit;
        return $this;
    }

    /**
     * @return ArrayOfSpecificDayOccupancyValue
     */
    public function getSpecificDaysOccValue()
    {
        return $this->SpecificDaysOccValue;
    }

    /**
     * @param ArrayOfSpecificDayOccupancyValue $SpecificDaysOccValue
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setSpecificDaysOccValue($SpecificDaysOccValue)
    {
        $this->SpecificDaysOccValue = $SpecificDaysOccValue;
        return $this;
    }

    /**
     * @return ArrayOfRatesDetails
     */
    public function getGroupRates()
    {
        return $this->groupRates;
    }

    /**
     * @param ArrayOfRatesDetails $groupRates
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setGroupRates($groupRates)
    {
        $this->groupRates = $groupRates;
        return $this;
    }

    /**
     * @return ArrayOfDetails
     */
    public function getUnitsAvailable()
    {
        return $this->UnitsAvailable;
    }

    /**
     * @param ArrayOfDetails $UnitsAvailable
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setUnitsAvailable($UnitsAvailable)
    {
        $this->UnitsAvailable = $UnitsAvailable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasValues()
    {
        return $this->HasValues;
    }

    /**
     * @param boolean $HasValues
     * @return \Gueststream\PMS\IQWare\API\GroupValues
     */
    public function setHasValues($HasValues)
    {
        $this->HasValues = $HasValues;
        return $this;
    }
}
