<?php

namespace Gueststream\PMS\IQWare\API;

class TravelAgent
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var int $AccountID
     */
    protected $AccountID = null;

    /**
     * @var string $IATANo
     */
    protected $IATANo = null;

    /**
     * @var boolean $IsPayable
     */
    protected $IsPayable = null;

    /**
     * @var int $CurrencyID
     */
    protected $CurrencyID = null;

    /**
     * @var int $AgentType
     */
    protected $AgentType = null;

    /**
     * @var int $SAStatus
     */
    protected $SAStatus = null;

    /**
     * @var int $AddressID
     */
    protected $AddressID = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var float $TotalCommNotApproved
     */
    protected $TotalCommNotApproved = null;

    /**
     * @var float $TotalCommNotPaid
     */
    protected $TotalCommNotPaid = null;

    /**
     * @var float $CheckNotReconcile
     */
    protected $CheckNotReconcile = null;

    /**
     * @var int $AccountAcceptedCurrencyType
     */
    protected $AccountAcceptedCurrencyType = null;

    /**
     * @var int $PaymentMode1
     */
    protected $PaymentMode1 = null;

    /**
     * @var float $Mode1PctCommRate
     */
    protected $Mode1PctCommRate = null;

    /**
     * @var float $Mode1FixCommRate
     */
    protected $Mode1FixCommRate = null;

    /**
     * @var float $Mode1AddPersonRate
     */
    protected $Mode1AddPersonRate = null;

    /**
     * @var int $PaymentMode2
     */
    protected $PaymentMode2 = null;

    /**
     * @var float $Mode2PctCommRate
     */
    protected $Mode2PctCommRate = null;

    /**
     * @var float $Mode2FixCommRate
     */
    protected $Mode2FixCommRate = null;

    /**
     * @var float $Mode2AddPersonRate
     */
    protected $Mode2AddPersonRate = null;

    /**
     * @var Reservations $Reservations
     */
    protected $Reservations = null;

    /**
     * @var Comissions $Comissions
     */
    protected $Comissions = null;

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var Balances $Balances
     */
    protected $Balances = null;

    /**
     * @var Telephones $Telephones
     */
    protected $Telephones = null;

    /**
     * @param int $AccountNo
     * @param int $AccountID
     * @param string $IATANo
     * @param boolean $IsPayable
     * @param int $CurrencyID
     * @param int $AgentType
     * @param int $SAStatus
     * @param int $AddressID
     * @param string $AccountName
     * @param float $TotalCommNotApproved
     * @param float $TotalCommNotPaid
     * @param float $CheckNotReconcile
     * @param int $AccountAcceptedCurrencyType
     * @param int $PaymentMode1
     * @param float $Mode1PctCommRate
     * @param float $Mode1FixCommRate
     * @param float $Mode1AddPersonRate
     * @param int $PaymentMode2
     * @param float $Mode2PctCommRate
     * @param float $Mode2FixCommRate
     * @param float $Mode2AddPersonRate
     * @param Reservations $Reservations
     * @param Comissions $Comissions
     * @param Address $Address
     * @param Balances $Balances
     * @param Telephones $Telephones
     */
    public function __construct($AccountNo, $AccountID, $IATANo, $IsPayable, $CurrencyID, $AgentType, $SAStatus, $AddressID, $AccountName, $TotalCommNotApproved, $TotalCommNotPaid, $CheckNotReconcile, $AccountAcceptedCurrencyType, $PaymentMode1, $Mode1PctCommRate, $Mode1FixCommRate, $Mode1AddPersonRate, $PaymentMode2, $Mode2PctCommRate, $Mode2FixCommRate, $Mode2AddPersonRate, $Reservations, $Comissions, $Address, $Balances, $Telephones)
    {
        $this->AccountNo = $AccountNo;
        $this->AccountID = $AccountID;
        $this->IATANo = $IATANo;
        $this->IsPayable = $IsPayable;
        $this->CurrencyID = $CurrencyID;
        $this->AgentType = $AgentType;
        $this->SAStatus = $SAStatus;
        $this->AddressID = $AddressID;
        $this->AccountName = $AccountName;
        $this->TotalCommNotApproved = $TotalCommNotApproved;
        $this->TotalCommNotPaid = $TotalCommNotPaid;
        $this->CheckNotReconcile = $CheckNotReconcile;
        $this->AccountAcceptedCurrencyType = $AccountAcceptedCurrencyType;
        $this->PaymentMode1 = $PaymentMode1;
        $this->Mode1PctCommRate = $Mode1PctCommRate;
        $this->Mode1FixCommRate = $Mode1FixCommRate;
        $this->Mode1AddPersonRate = $Mode1AddPersonRate;
        $this->PaymentMode2 = $PaymentMode2;
        $this->Mode2PctCommRate = $Mode2PctCommRate;
        $this->Mode2FixCommRate = $Mode2FixCommRate;
        $this->Mode2AddPersonRate = $Mode2AddPersonRate;
        $this->Reservations = $Reservations;
        $this->Comissions = $Comissions;
        $this->Address = $Address;
        $this->Balances = $Balances;
        $this->Telephones = $Telephones;
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
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * @param int $AccountID
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setAccountID($AccountID)
    {
        $this->AccountID = $AccountID;
        return $this;
    }

    /**
     * @return string
     */
    public function getIATANo()
    {
        return $this->IATANo;
    }

    /**
     * @param string $IATANo
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setIATANo($IATANo)
    {
        $this->IATANo = $IATANo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPayable()
    {
        return $this->IsPayable;
    }

    /**
     * @param boolean $IsPayable
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setIsPayable($IsPayable)
    {
        $this->IsPayable = $IsPayable;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyID()
    {
        return $this->CurrencyID;
    }

    /**
     * @param int $CurrencyID
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setCurrencyID($CurrencyID)
    {
        $this->CurrencyID = $CurrencyID;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgentType()
    {
        return $this->AgentType;
    }

    /**
     * @param int $AgentType
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setAgentType($AgentType)
    {
        $this->AgentType = $AgentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSAStatus()
    {
        return $this->SAStatus;
    }

    /**
     * @param int $SAStatus
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setSAStatus($SAStatus)
    {
        $this->SAStatus = $SAStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddressID()
    {
        return $this->AddressID;
    }

    /**
     * @param int $AddressID
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setAddressID($AddressID)
    {
        $this->AddressID = $AddressID;
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
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalCommNotApproved()
    {
        return $this->TotalCommNotApproved;
    }

    /**
     * @param float $TotalCommNotApproved
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setTotalCommNotApproved($TotalCommNotApproved)
    {
        $this->TotalCommNotApproved = $TotalCommNotApproved;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalCommNotPaid()
    {
        return $this->TotalCommNotPaid;
    }

    /**
     * @param float $TotalCommNotPaid
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setTotalCommNotPaid($TotalCommNotPaid)
    {
        $this->TotalCommNotPaid = $TotalCommNotPaid;
        return $this;
    }

    /**
     * @return float
     */
    public function getCheckNotReconcile()
    {
        return $this->CheckNotReconcile;
    }

    /**
     * @param float $CheckNotReconcile
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setCheckNotReconcile($CheckNotReconcile)
    {
        $this->CheckNotReconcile = $CheckNotReconcile;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountAcceptedCurrencyType()
    {
        return $this->AccountAcceptedCurrencyType;
    }

    /**
     * @param int $AccountAcceptedCurrencyType
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setAccountAcceptedCurrencyType($AccountAcceptedCurrencyType)
    {
        $this->AccountAcceptedCurrencyType = $AccountAcceptedCurrencyType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMode1()
    {
        return $this->PaymentMode1;
    }

    /**
     * @param int $PaymentMode1
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setPaymentMode1($PaymentMode1)
    {
        $this->PaymentMode1 = $PaymentMode1;
        return $this;
    }

    /**
     * @return float
     */
    public function getMode1PctCommRate()
    {
        return $this->Mode1PctCommRate;
    }

    /**
     * @param float $Mode1PctCommRate
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setMode1PctCommRate($Mode1PctCommRate)
    {
        $this->Mode1PctCommRate = $Mode1PctCommRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getMode1FixCommRate()
    {
        return $this->Mode1FixCommRate;
    }

    /**
     * @param float $Mode1FixCommRate
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setMode1FixCommRate($Mode1FixCommRate)
    {
        $this->Mode1FixCommRate = $Mode1FixCommRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getMode1AddPersonRate()
    {
        return $this->Mode1AddPersonRate;
    }

    /**
     * @param float $Mode1AddPersonRate
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setMode1AddPersonRate($Mode1AddPersonRate)
    {
        $this->Mode1AddPersonRate = $Mode1AddPersonRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMode2()
    {
        return $this->PaymentMode2;
    }

    /**
     * @param int $PaymentMode2
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setPaymentMode2($PaymentMode2)
    {
        $this->PaymentMode2 = $PaymentMode2;
        return $this;
    }

    /**
     * @return float
     */
    public function getMode2PctCommRate()
    {
        return $this->Mode2PctCommRate;
    }

    /**
     * @param float $Mode2PctCommRate
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setMode2PctCommRate($Mode2PctCommRate)
    {
        $this->Mode2PctCommRate = $Mode2PctCommRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getMode2FixCommRate()
    {
        return $this->Mode2FixCommRate;
    }

    /**
     * @param float $Mode2FixCommRate
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setMode2FixCommRate($Mode2FixCommRate)
    {
        $this->Mode2FixCommRate = $Mode2FixCommRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getMode2AddPersonRate()
    {
        return $this->Mode2AddPersonRate;
    }

    /**
     * @param float $Mode2AddPersonRate
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setMode2AddPersonRate($Mode2AddPersonRate)
    {
        $this->Mode2AddPersonRate = $Mode2AddPersonRate;
        return $this;
    }

    /**
     * @return Reservations
     */
    public function getReservations()
    {
        return $this->Reservations;
    }

    /**
     * @param Reservations $Reservations
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setReservations($Reservations)
    {
        $this->Reservations = $Reservations;
        return $this;
    }

    /**
     * @return Comissions
     */
    public function getComissions()
    {
        return $this->Comissions;
    }

    /**
     * @param Comissions $Comissions
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setComissions($Comissions)
    {
        $this->Comissions = $Comissions;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return Balances
     */
    public function getBalances()
    {
        return $this->Balances;
    }

    /**
     * @param Balances $Balances
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setBalances($Balances)
    {
        $this->Balances = $Balances;
        return $this;
    }

    /**
     * @return Telephones
     */
    public function getTelephones()
    {
        return $this->Telephones;
    }

    /**
     * @param Telephones $Telephones
     * @return \Gueststream\PMS\IQWare\API\TravelAgent
     */
    public function setTelephones($Telephones)
    {
        $this->Telephones = $Telephones;
        return $this;
    }
}
