<?php

namespace Gueststream\PMS\IQWare\API;

class cTravelAgentInfos
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $IATANo
     */
    protected $IATANo = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var boolean $IsInactif
     */
    protected $IsInactif = null;

    /**
     * @var TAgentType $AgentType
     */
    protected $AgentType = null;

    /**
     * @var int $ID_Geographic
     */
    protected $ID_Geographic = null;

    /**
     * @var TTACommissionType $PaymentMode1
     */
    protected $PaymentMode1 = null;

    /**
     * @var TTACommissionType $PaymentMode2
     */
    protected $PaymentMode2 = null;

    /**
     * @var float $PctCommissionRate
     */
    protected $PctCommissionRate = null;

    /**
     * @var float $PctCommissionRate2
     */
    protected $PctCommissionRate2 = null;

    /**
     * @var float $FixCommissionRate
     */
    protected $FixCommissionRate = null;

    /**
     * @var float $FixCommissionRate2
     */
    protected $FixCommissionRate2 = null;

    /**
     * @var float $AddPersCommissionRate
     */
    protected $AddPersCommissionRate = null;

    /**
     * @var float $AddPersCommissionRate2
     */
    protected $AddPersCommissionRate2 = null;

    /**
     * @var cTravelAgentAccount $Account
     */
    protected $Account = null;

    /**
     * @var cTAAddresses $Addresses
     */
    protected $Addresses = null;

    /**
     * @param int $AccountNo
     * @param boolean $IsInactif
     * @param TAgentType $AgentType
     * @param int $ID_Geographic
     * @param TTACommissionType $PaymentMode1
     * @param TTACommissionType $PaymentMode2
     * @param float $PctCommissionRate
     * @param float $PctCommissionRate2
     * @param float $FixCommissionRate
     * @param float $FixCommissionRate2
     * @param float $AddPersCommissionRate
     * @param float $AddPersCommissionRate2
     */
    public function __construct($AccountNo, $IsInactif, $AgentType, $ID_Geographic, $PaymentMode1, $PaymentMode2, $PctCommissionRate, $PctCommissionRate2, $FixCommissionRate, $FixCommissionRate2, $AddPersCommissionRate, $AddPersCommissionRate2)
    {
        $this->AccountNo = $AccountNo;
        $this->IsInactif = $IsInactif;
        $this->AgentType = $AgentType;
        $this->ID_Geographic = $ID_Geographic;
        $this->PaymentMode1 = $PaymentMode1;
        $this->PaymentMode2 = $PaymentMode2;
        $this->PctCommissionRate = $PctCommissionRate;
        $this->PctCommissionRate2 = $PctCommissionRate2;
        $this->FixCommissionRate = $FixCommissionRate;
        $this->FixCommissionRate2 = $FixCommissionRate2;
        $this->AddPersCommissionRate = $AddPersCommissionRate;
        $this->AddPersCommissionRate2 = $AddPersCommissionRate2;
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
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setIATANo($IATANo)
    {
        $this->IATANo = $IATANo;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setNote($Note)
    {
        $this->Note = $Note;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactif()
    {
        return $this->IsInactif;
    }

    /**
     * @param boolean $IsInactif
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setIsInactif($IsInactif)
    {
        $this->IsInactif = $IsInactif;
        return $this;
    }

    /**
     * @return TAgentType
     */
    public function getAgentType()
    {
        return $this->AgentType;
    }

    /**
     * @param TAgentType $AgentType
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setAgentType($AgentType)
    {
        $this->AgentType = $AgentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Geographic()
    {
        return $this->ID_Geographic;
    }

    /**
     * @param int $ID_Geographic
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setID_Geographic($ID_Geographic)
    {
        $this->ID_Geographic = $ID_Geographic;
        return $this;
    }

    /**
     * @return TTACommissionType
     */
    public function getPaymentMode1()
    {
        return $this->PaymentMode1;
    }

    /**
     * @param TTACommissionType $PaymentMode1
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setPaymentMode1($PaymentMode1)
    {
        $this->PaymentMode1 = $PaymentMode1;
        return $this;
    }

    /**
     * @return TTACommissionType
     */
    public function getPaymentMode2()
    {
        return $this->PaymentMode2;
    }

    /**
     * @param TTACommissionType $PaymentMode2
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setPaymentMode2($PaymentMode2)
    {
        $this->PaymentMode2 = $PaymentMode2;
        return $this;
    }

    /**
     * @return float
     */
    public function getPctCommissionRate()
    {
        return $this->PctCommissionRate;
    }

    /**
     * @param float $PctCommissionRate
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setPctCommissionRate($PctCommissionRate)
    {
        $this->PctCommissionRate = $PctCommissionRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPctCommissionRate2()
    {
        return $this->PctCommissionRate2;
    }

    /**
     * @param float $PctCommissionRate2
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setPctCommissionRate2($PctCommissionRate2)
    {
        $this->PctCommissionRate2 = $PctCommissionRate2;
        return $this;
    }

    /**
     * @return float
     */
    public function getFixCommissionRate()
    {
        return $this->FixCommissionRate;
    }

    /**
     * @param float $FixCommissionRate
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setFixCommissionRate($FixCommissionRate)
    {
        $this->FixCommissionRate = $FixCommissionRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getFixCommissionRate2()
    {
        return $this->FixCommissionRate2;
    }

    /**
     * @param float $FixCommissionRate2
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setFixCommissionRate2($FixCommissionRate2)
    {
        $this->FixCommissionRate2 = $FixCommissionRate2;
        return $this;
    }

    /**
     * @return float
     */
    public function getAddPersCommissionRate()
    {
        return $this->AddPersCommissionRate;
    }

    /**
     * @param float $AddPersCommissionRate
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setAddPersCommissionRate($AddPersCommissionRate)
    {
        $this->AddPersCommissionRate = $AddPersCommissionRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAddPersCommissionRate2()
    {
        return $this->AddPersCommissionRate2;
    }

    /**
     * @param float $AddPersCommissionRate2
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setAddPersCommissionRate2($AddPersCommissionRate2)
    {
        $this->AddPersCommissionRate2 = $AddPersCommissionRate2;
        return $this;
    }

    /**
     * @return cTravelAgentAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param cTravelAgentAccount $Account
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * @return cTAAddresses
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param cTAAddresses $Addresses
     * @return \Gueststream\PMS\IQWare\API\cTravelAgentInfos
     */
    public function setAddresses($Addresses)
    {
        $this->Addresses = $Addresses;
        return $this;
    }
}
