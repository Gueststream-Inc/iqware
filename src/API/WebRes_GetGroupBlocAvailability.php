<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupBlocAvailability
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var int $ID_Account
     */
    protected $ID_Account = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var TGroupBlocType $BlocType
     */
    protected $BlocType = null;

    /**
     * @var TGroupBlocQtyType $BlocQtyType
     */
    protected $BlocQtyType = null;

    /**
     * @param int $guid
     * @param string $LanguageCode
     * @param int $ID_Account
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param TGroupBlocType $BlocType
     * @param TGroupBlocQtyType $BlocQtyType
     */
    public function __construct($guid, $LanguageCode, $ID_Account, \DateTime $StartDate, \DateTime $EndDate, $BlocType, $BlocQtyType)
    {
        $this->guid = $guid;
        $this->LanguageCode = $LanguageCode;
        $this->ID_Account = $ID_Account;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->BlocType = $BlocType;
        $this->BlocQtyType = $BlocQtyType;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupBlocAvailability
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param string $LanguageCode
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupBlocAvailability
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Account()
    {
        return $this->ID_Account;
    }

    /**
     * @param int $ID_Account
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupBlocAvailability
     */
    public function setID_Account($ID_Account)
    {
        $this->ID_Account = $ID_Account;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupBlocAvailability
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupBlocAvailability
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return TGroupBlocType
     */
    public function getBlocType()
    {
        return $this->BlocType;
    }

    /**
     * @param TGroupBlocType $BlocType
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupBlocAvailability
     */
    public function setBlocType($BlocType)
    {
        $this->BlocType = $BlocType;
        return $this;
    }

    /**
     * @return TGroupBlocQtyType
     */
    public function getBlocQtyType()
    {
        return $this->BlocQtyType;
    }

    /**
     * @param TGroupBlocQtyType $BlocQtyType
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupBlocAvailability
     */
    public function setBlocQtyType($BlocQtyType)
    {
        $this->BlocQtyType = $BlocQtyType;
        return $this;
    }
}
