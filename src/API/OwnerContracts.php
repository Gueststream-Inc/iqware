<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerContracts
{

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var int $ID_Member
     */
    protected $ID_Member = null;

    /**
     * @var string $ContractNo
     */
    protected $ContractNo = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var boolean $IsGross
     */
    protected $IsGross = null;

    /**
     * @var \DateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var int $CondoType
     */
    protected $CondoType = null;

    /**
     * @var boolean $IsPenalty
     */
    protected $IsPenalty = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var boolean $IsTaxDoc
     */
    protected $IsTaxDoc = null;

    /**
     * @var \DateTime $TaxDocDate
     */
    protected $TaxDocDate = null;

    /**
     * @var int $MinDayPromo
     */
    protected $MinDayPromo = null;

    /**
     * @var boolean $IsAgeCat1Refused
     */
    protected $IsAgeCat1Refused = null;

    /**
     * @var float $BoughtValue
     */
    protected $BoughtValue = null;

    /**
     * @var int $NbrMaxGuest
     */
    protected $NbrMaxGuest = null;

    /**
     * @var float $SaleValue
     */
    protected $SaleValue = null;

    /**
     * @var boolean $IsAgeCat2Refused
     */
    protected $IsAgeCat2Refused = null;

    /**
     * @var float $UnitValue
     */
    protected $UnitValue = null;

    /**
     * @var boolean $IsAgeCat3Refused
     */
    protected $IsAgeCat3Refused = null;

    /**
     * @var boolean $IsAgeCat4Refused
     */
    protected $IsAgeCat4Refused = null;

    /**
     * @var boolean $IsPool
     */
    protected $IsPool = null;

    /**
     * @var int $ID_Admin
     */
    protected $ID_Admin = null;

    /**
     * @var boolean $IsRefusal
     */
    protected $IsRefusal = null;

    /**
     * @var boolean $IsSold
     */
    protected $IsSold = null;

    /**
     * @var boolean $IsCalculateCheck
     */
    protected $IsCalculateCheck = null;

    /**
     * @var boolean $IsSA
     */
    protected $IsSA = null;

    /**
     * @var int $PlanNbre
     */
    protected $PlanNbre = null;

    /**
     * @var boolean $IsSpecificReserve
     */
    protected $IsSpecificReserve = null;

    /**
     * @var float $AmountReserveMinimum
     */
    protected $AmountReserveMinimum = null;

    /**
     * @var int $FiscalDate
     */
    protected $FiscalDate = null;

    /**
     * @var int $ID_AdresseAdmin
     */
    protected $ID_AdresseAdmin = null;

    /**
     * @var int $GuestMax
     */
    protected $GuestMax = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var boolean $IsAnnualMaintenance
     */
    protected $IsAnnualMaintenance = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var float $PctTAChargedBack
     */
    protected $PctTAChargedBack = null;

    /**
     * @var float $PctCCChargedBack
     */
    protected $PctCCChargedBack = null;

    /**
     * @var boolean $IsFractional
     */
    protected $IsFractional = null;

    /**
     * @var boolean $IsNoBooking
     */
    protected $IsNoBooking = null;

    /**
     * @var int $RoomCategory
     */
    protected $RoomCategory = null;

    /**
     * @var string $ContractType
     */
    protected $ContractType = null;

    /**
     * @var ContractBalances $ContractBalances
     */
    protected $ContractBalances = null;

    /**
     * @var ContractExpenses $ContractExpenses
     */
    protected $ContractExpenses = null;

    /**
     * @var ContractsBank $ContractsBank
     */
    protected $ContractsBank = null;

    /**
     * @var ContractSegments $ContractSegments
     */
    protected $ContractSegments = null;

    /**
     * @var int $CondoOwner_Id
     */
    protected $CondoOwner_Id = null;

    /**
     * @var int $CondoOwner_Id_0
     */
    protected $CondoOwner_Id_0 = null;

    /**
     * @param int $ID_CondoOwner
     * @param int $ID_Member
     * @param string $ContractNo
     * @param int $ID_Room
     * @param boolean $IsGross
     * @param \DateTime $BeginDate
     * @param int $CondoType
     * @param boolean $IsPenalty
     * @param \DateTime $EndDate
     * @param boolean $IsTaxDoc
     * @param \DateTime $TaxDocDate
     * @param int $MinDayPromo
     * @param boolean $IsAgeCat1Refused
     * @param float $BoughtValue
     * @param int $NbrMaxGuest
     * @param float $SaleValue
     * @param boolean $IsAgeCat2Refused
     * @param float $UnitValue
     * @param boolean $IsAgeCat3Refused
     * @param boolean $IsAgeCat4Refused
     * @param boolean $IsPool
     * @param int $ID_Admin
     * @param boolean $IsRefusal
     * @param boolean $IsSold
     * @param boolean $IsCalculateCheck
     * @param boolean $IsSA
     * @param int $PlanNbre
     * @param boolean $IsSpecificReserve
     * @param float $AmountReserveMinimum
     * @param int $FiscalDate
     * @param int $ID_AdresseAdmin
     * @param int $GuestMax
     * @param int $ID_RoomType
     * @param string $AccountName
     * @param boolean $IsAnnualMaintenance
     * @param string $RoomNo
     * @param float $PctTAChargedBack
     * @param float $PctCCChargedBack
     * @param boolean $IsFractional
     * @param boolean $IsNoBooking
     * @param int $RoomCategory
     * @param string $ContractType
     * @param ContractBalances $ContractBalances
     * @param ContractExpenses $ContractExpenses
     * @param ContractsBank $ContractsBank
     * @param ContractSegments $ContractSegments
     * @param int $CondoOwner_Id
     * @param int $CondoOwner_Id_0
     */
    public function __construct($ID_CondoOwner, $ID_Member, $ContractNo, $ID_Room, $IsGross, \DateTime $BeginDate, $CondoType, $IsPenalty, \DateTime $EndDate, $IsTaxDoc, \DateTime $TaxDocDate, $MinDayPromo, $IsAgeCat1Refused, $BoughtValue, $NbrMaxGuest, $SaleValue, $IsAgeCat2Refused, $UnitValue, $IsAgeCat3Refused, $IsAgeCat4Refused, $IsPool, $ID_Admin, $IsRefusal, $IsSold, $IsCalculateCheck, $IsSA, $PlanNbre, $IsSpecificReserve, $AmountReserveMinimum, $FiscalDate, $ID_AdresseAdmin, $GuestMax, $ID_RoomType, $AccountName, $IsAnnualMaintenance, $RoomNo, $PctTAChargedBack, $PctCCChargedBack, $IsFractional, $IsNoBooking, $RoomCategory, $ContractType, $ContractBalances, $ContractExpenses, $ContractsBank, $ContractSegments, $CondoOwner_Id, $CondoOwner_Id_0)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->ID_Member = $ID_Member;
        $this->ContractNo = $ContractNo;
        $this->ID_Room = $ID_Room;
        $this->IsGross = $IsGross;
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
        $this->CondoType = $CondoType;
        $this->IsPenalty = $IsPenalty;
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->IsTaxDoc = $IsTaxDoc;
        $this->TaxDocDate = $TaxDocDate->format(\DateTime::ATOM);
        $this->MinDayPromo = $MinDayPromo;
        $this->IsAgeCat1Refused = $IsAgeCat1Refused;
        $this->BoughtValue = $BoughtValue;
        $this->NbrMaxGuest = $NbrMaxGuest;
        $this->SaleValue = $SaleValue;
        $this->IsAgeCat2Refused = $IsAgeCat2Refused;
        $this->UnitValue = $UnitValue;
        $this->IsAgeCat3Refused = $IsAgeCat3Refused;
        $this->IsAgeCat4Refused = $IsAgeCat4Refused;
        $this->IsPool = $IsPool;
        $this->ID_Admin = $ID_Admin;
        $this->IsRefusal = $IsRefusal;
        $this->IsSold = $IsSold;
        $this->IsCalculateCheck = $IsCalculateCheck;
        $this->IsSA = $IsSA;
        $this->PlanNbre = $PlanNbre;
        $this->IsSpecificReserve = $IsSpecificReserve;
        $this->AmountReserveMinimum = $AmountReserveMinimum;
        $this->FiscalDate = $FiscalDate;
        $this->ID_AdresseAdmin = $ID_AdresseAdmin;
        $this->GuestMax = $GuestMax;
        $this->ID_RoomType = $ID_RoomType;
        $this->AccountName = $AccountName;
        $this->IsAnnualMaintenance = $IsAnnualMaintenance;
        $this->RoomNo = $RoomNo;
        $this->PctTAChargedBack = $PctTAChargedBack;
        $this->PctCCChargedBack = $PctCCChargedBack;
        $this->IsFractional = $IsFractional;
        $this->IsNoBooking = $IsNoBooking;
        $this->RoomCategory = $RoomCategory;
        $this->ContractType = $ContractType;
        $this->ContractBalances = $ContractBalances;
        $this->ContractExpenses = $ContractExpenses;
        $this->ContractsBank = $ContractsBank;
        $this->ContractSegments = $ContractSegments;
        $this->CondoOwner_Id = $CondoOwner_Id;
        $this->CondoOwner_Id_0 = $CondoOwner_Id_0;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setID_Member($ID_Member)
    {
        $this->ID_Member = $ID_Member;
        return $this;
    }

    /**
     * @return string
     */
    public function getContractNo()
    {
        return $this->ContractNo;
    }

    /**
     * @param string $ContractNo
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setContractNo($ContractNo)
    {
        $this->ContractNo = $ContractNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Room()
    {
        return $this->ID_Room;
    }

    /**
     * @param int $ID_Room
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGross()
    {
        return $this->IsGross;
    }

    /**
     * @param boolean $IsGross
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsGross($IsGross)
    {
        $this->IsGross = $IsGross;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
        if ($this->BeginDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BeginDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BeginDate
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setBeginDate(\DateTime $BeginDate)
    {
        $this->BeginDate = $BeginDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getCondoType()
    {
        return $this->CondoType;
    }

    /**
     * @param int $CondoType
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setCondoType($CondoType)
    {
        $this->CondoType = $CondoType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPenalty()
    {
        return $this->IsPenalty;
    }

    /**
     * @param boolean $IsPenalty
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsPenalty($IsPenalty)
    {
        $this->IsPenalty = $IsPenalty;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxDoc()
    {
        return $this->IsTaxDoc;
    }

    /**
     * @param boolean $IsTaxDoc
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsTaxDoc($IsTaxDoc)
    {
        $this->IsTaxDoc = $IsTaxDoc;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTaxDocDate()
    {
        if ($this->TaxDocDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->TaxDocDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TaxDocDate
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setTaxDocDate(\DateTime $TaxDocDate)
    {
        $this->TaxDocDate = $TaxDocDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getMinDayPromo()
    {
        return $this->MinDayPromo;
    }

    /**
     * @param int $MinDayPromo
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setMinDayPromo($MinDayPromo)
    {
        $this->MinDayPromo = $MinDayPromo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAgeCat1Refused()
    {
        return $this->IsAgeCat1Refused;
    }

    /**
     * @param boolean $IsAgeCat1Refused
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsAgeCat1Refused($IsAgeCat1Refused)
    {
        $this->IsAgeCat1Refused = $IsAgeCat1Refused;
        return $this;
    }

    /**
     * @return float
     */
    public function getBoughtValue()
    {
        return $this->BoughtValue;
    }

    /**
     * @param float $BoughtValue
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setBoughtValue($BoughtValue)
    {
        $this->BoughtValue = $BoughtValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrMaxGuest()
    {
        return $this->NbrMaxGuest;
    }

    /**
     * @param int $NbrMaxGuest
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setNbrMaxGuest($NbrMaxGuest)
    {
        $this->NbrMaxGuest = $NbrMaxGuest;
        return $this;
    }

    /**
     * @return float
     */
    public function getSaleValue()
    {
        return $this->SaleValue;
    }

    /**
     * @param float $SaleValue
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setSaleValue($SaleValue)
    {
        $this->SaleValue = $SaleValue;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAgeCat2Refused()
    {
        return $this->IsAgeCat2Refused;
    }

    /**
     * @param boolean $IsAgeCat2Refused
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsAgeCat2Refused($IsAgeCat2Refused)
    {
        $this->IsAgeCat2Refused = $IsAgeCat2Refused;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitValue()
    {
        return $this->UnitValue;
    }

    /**
     * @param float $UnitValue
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setUnitValue($UnitValue)
    {
        $this->UnitValue = $UnitValue;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAgeCat3Refused()
    {
        return $this->IsAgeCat3Refused;
    }

    /**
     * @param boolean $IsAgeCat3Refused
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsAgeCat3Refused($IsAgeCat3Refused)
    {
        $this->IsAgeCat3Refused = $IsAgeCat3Refused;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAgeCat4Refused()
    {
        return $this->IsAgeCat4Refused;
    }

    /**
     * @param boolean $IsAgeCat4Refused
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsAgeCat4Refused($IsAgeCat4Refused)
    {
        $this->IsAgeCat4Refused = $IsAgeCat4Refused;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPool()
    {
        return $this->IsPool;
    }

    /**
     * @param boolean $IsPool
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsPool($IsPool)
    {
        $this->IsPool = $IsPool;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setID_Admin($ID_Admin)
    {
        $this->ID_Admin = $ID_Admin;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRefusal()
    {
        return $this->IsRefusal;
    }

    /**
     * @param boolean $IsRefusal
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsRefusal($IsRefusal)
    {
        $this->IsRefusal = $IsRefusal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSold()
    {
        return $this->IsSold;
    }

    /**
     * @param boolean $IsSold
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsSold($IsSold)
    {
        $this->IsSold = $IsSold;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCalculateCheck()
    {
        return $this->IsCalculateCheck;
    }

    /**
     * @param boolean $IsCalculateCheck
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsCalculateCheck($IsCalculateCheck)
    {
        $this->IsCalculateCheck = $IsCalculateCheck;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSA()
    {
        return $this->IsSA;
    }

    /**
     * @param boolean $IsSA
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsSA($IsSA)
    {
        $this->IsSA = $IsSA;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlanNbre()
    {
        return $this->PlanNbre;
    }

    /**
     * @param int $PlanNbre
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setPlanNbre($PlanNbre)
    {
        $this->PlanNbre = $PlanNbre;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSpecificReserve()
    {
        return $this->IsSpecificReserve;
    }

    /**
     * @param boolean $IsSpecificReserve
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsSpecificReserve($IsSpecificReserve)
    {
        $this->IsSpecificReserve = $IsSpecificReserve;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountReserveMinimum()
    {
        return $this->AmountReserveMinimum;
    }

    /**
     * @param float $AmountReserveMinimum
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setAmountReserveMinimum($AmountReserveMinimum)
    {
        $this->AmountReserveMinimum = $AmountReserveMinimum;
        return $this;
    }

    /**
     * @return int
     */
    public function getFiscalDate()
    {
        return $this->FiscalDate;
    }

    /**
     * @param int $FiscalDate
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setFiscalDate($FiscalDate)
    {
        $this->FiscalDate = $FiscalDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_AdresseAdmin()
    {
        return $this->ID_AdresseAdmin;
    }

    /**
     * @param int $ID_AdresseAdmin
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setID_AdresseAdmin($ID_AdresseAdmin)
    {
        $this->ID_AdresseAdmin = $ID_AdresseAdmin;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setGuestMax($GuestMax)
    {
        $this->GuestMax = $GuestMax;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAnnualMaintenance()
    {
        return $this->IsAnnualMaintenance;
    }

    /**
     * @param boolean $IsAnnualMaintenance
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsAnnualMaintenance($IsAnnualMaintenance)
    {
        $this->IsAnnualMaintenance = $IsAnnualMaintenance;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomNo()
    {
        return $this->RoomNo;
    }

    /**
     * @param string $RoomNo
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
        return $this;
    }

    /**
     * @return float
     */
    public function getPctTAChargedBack()
    {
        return $this->PctTAChargedBack;
    }

    /**
     * @param float $PctTAChargedBack
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setPctTAChargedBack($PctTAChargedBack)
    {
        $this->PctTAChargedBack = $PctTAChargedBack;
        return $this;
    }

    /**
     * @return float
     */
    public function getPctCCChargedBack()
    {
        return $this->PctCCChargedBack;
    }

    /**
     * @param float $PctCCChargedBack
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setPctCCChargedBack($PctCCChargedBack)
    {
        $this->PctCCChargedBack = $PctCCChargedBack;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFractional()
    {
        return $this->IsFractional;
    }

    /**
     * @param boolean $IsFractional
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsFractional($IsFractional)
    {
        $this->IsFractional = $IsFractional;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNoBooking()
    {
        return $this->IsNoBooking;
    }

    /**
     * @param boolean $IsNoBooking
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setIsNoBooking($IsNoBooking)
    {
        $this->IsNoBooking = $IsNoBooking;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomCategory()
    {
        return $this->RoomCategory;
    }

    /**
     * @param int $RoomCategory
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setRoomCategory($RoomCategory)
    {
        $this->RoomCategory = $RoomCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getContractType()
    {
        return $this->ContractType;
    }

    /**
     * @param string $ContractType
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setContractType($ContractType)
    {
        $this->ContractType = $ContractType;
        return $this;
    }

    /**
     * @return ContractBalances
     */
    public function getContractBalances()
    {
        return $this->ContractBalances;
    }

    /**
     * @param ContractBalances $ContractBalances
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setContractBalances($ContractBalances)
    {
        $this->ContractBalances = $ContractBalances;
        return $this;
    }

    /**
     * @return ContractExpenses
     */
    public function getContractExpenses()
    {
        return $this->ContractExpenses;
    }

    /**
     * @param ContractExpenses $ContractExpenses
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setContractExpenses($ContractExpenses)
    {
        $this->ContractExpenses = $ContractExpenses;
        return $this;
    }

    /**
     * @return ContractsBank
     */
    public function getContractsBank()
    {
        return $this->ContractsBank;
    }

    /**
     * @param ContractsBank $ContractsBank
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setContractsBank($ContractsBank)
    {
        $this->ContractsBank = $ContractsBank;
        return $this;
    }

    /**
     * @return ContractSegments
     */
    public function getContractSegments()
    {
        return $this->ContractSegments;
    }

    /**
     * @param ContractSegments $ContractSegments
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setContractSegments($ContractSegments)
    {
        $this->ContractSegments = $ContractSegments;
        return $this;
    }

    /**
     * @return int
     */
    public function getCondoOwner_Id()
    {
        return $this->CondoOwner_Id;
    }

    /**
     * @param int $CondoOwner_Id
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setCondoOwner_Id($CondoOwner_Id)
    {
        $this->CondoOwner_Id = $CondoOwner_Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCondoOwner_Id_0()
    {
        return $this->CondoOwner_Id_0;
    }

    /**
     * @param int $CondoOwner_Id_0
     * @return \Gueststream\PMS\IQWare\API\OwnerContracts
     */
    public function setCondoOwner_Id_0($CondoOwner_Id_0)
    {
        $this->CondoOwner_Id_0 = $CondoOwner_Id_0;
        return $this;
    }
}
