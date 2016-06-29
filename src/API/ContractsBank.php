<?php

namespace Gueststream\PMS\IQWare\API;

class ContractsBank
{

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var \DateTime $BeginDateSeason
     */
    protected $BeginDateSeason = null;

    /**
     * @var \DateTime $EndDateSeason
     */
    protected $EndDateSeason = null;

    /**
     * @var int $InitialBank
     */
    protected $InitialBank = null;

    /**
     * @var int $Promised
     */
    protected $Promised = null;

    /**
     * @var int $UsedBank
     */
    protected $UsedBank = null;

    /**
     * @var boolean $IsCurrentSeason
     */
    protected $IsCurrentSeason = null;

    /**
     * @param int $ID_CondoOwner
     * @param string $Description
     * @param \DateTime $BeginDateSeason
     * @param \DateTime $EndDateSeason
     * @param int $InitialBank
     * @param int $Promised
     * @param int $UsedBank
     * @param boolean $IsCurrentSeason
     */
    public function __construct($ID_CondoOwner, $Description, \DateTime $BeginDateSeason, \DateTime $EndDateSeason, $InitialBank, $Promised, $UsedBank, $IsCurrentSeason)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->Description = $Description;
        $this->BeginDateSeason = $BeginDateSeason->format(\DateTime::ATOM);
        $this->EndDateSeason = $EndDateSeason->format(\DateTime::ATOM);
        $this->InitialBank = $InitialBank;
        $this->Promised = $Promised;
        $this->UsedBank = $UsedBank;
        $this->IsCurrentSeason = $IsCurrentSeason;
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
     * @return \Gueststream\PMS\IQWare\API\ContractsBank
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Gueststream\PMS\IQWare\API\ContractsBank
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginDateSeason()
    {
        if ($this->BeginDateSeason == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BeginDateSeason);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BeginDateSeason
     * @return \Gueststream\PMS\IQWare\API\ContractsBank
     */
    public function setBeginDateSeason(\DateTime $BeginDateSeason)
    {
        $this->BeginDateSeason = $BeginDateSeason->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateSeason()
    {
        if ($this->EndDateSeason == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDateSeason);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDateSeason
     * @return \Gueststream\PMS\IQWare\API\ContractsBank
     */
    public function setEndDateSeason(\DateTime $EndDateSeason)
    {
        $this->EndDateSeason = $EndDateSeason->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getInitialBank()
    {
        return $this->InitialBank;
    }

    /**
     * @param int $InitialBank
     * @return \Gueststream\PMS\IQWare\API\ContractsBank
     */
    public function setInitialBank($InitialBank)
    {
        $this->InitialBank = $InitialBank;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromised()
    {
        return $this->Promised;
    }

    /**
     * @param int $Promised
     * @return \Gueststream\PMS\IQWare\API\ContractsBank
     */
    public function setPromised($Promised)
    {
        $this->Promised = $Promised;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsedBank()
    {
        return $this->UsedBank;
    }

    /**
     * @param int $UsedBank
     * @return \Gueststream\PMS\IQWare\API\ContractsBank
     */
    public function setUsedBank($UsedBank)
    {
        $this->UsedBank = $UsedBank;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCurrentSeason()
    {
        return $this->IsCurrentSeason;
    }

    /**
     * @param boolean $IsCurrentSeason
     * @return \Gueststream\PMS\IQWare\API\ContractsBank
     */
    public function setIsCurrentSeason($IsCurrentSeason)
    {
        $this->IsCurrentSeason = $IsCurrentSeason;
        return $this;
    }
}
